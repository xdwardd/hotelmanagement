<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Rooms;

class HotelController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $room = Rooms::orderBy('created_at', 'asc')->get();
        return view('index')->with('rooms', $room);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'price' => 'required',
            'roomnum' => 'required',
            'body' => 'required',
            'type' => 'required',
            'related_image' => 'image|nullable|max:1999',
            'cover_image' => 'image|nullable|max:1999'

        ]);
            //handle image
            if ($request->hasFile('cover_image')) {
                # get filename and extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //filename to store
                $filenametoStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('cover_image')->storeAs('public/cover_images',$filenametoStore);
            } else {
                $filenametoStore = 'noimg.jpg';
            }
            //related image
           
            if ($request->hasFile('related_image')) {
                # get filename and extension
                $filenameWithExt = $request->file('related_image')->getClientOriginalName();
                //get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('related_image')->getClientOriginalExtension();
                //filename to store
                $filenameStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('related_image')->storeAs('public/cover_images',$filenameStore);
            } else {
                $filenameStore = 'noimg.jpg';
            }
            
        //create
        $room = new Rooms;

        $room->body = $request->input('body');
        $room->price = $request->input('price');
        $room->roomnum = $request->input('roomnum');
        $room->type = $request->input('type');
        $room->cover_image = $filenametoStore;
        $room->related_image = $filenameStore;
        $room->user_id = auth()->user()->id;

        $room->save();

        return redirect('/dashboard')->with('success' , 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $room = Rooms::find($id);
        return view('show')->with('room',$room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $room = Rooms::find($id);
        return view('edit')->with('room', $room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $this->validate($request,[
            'price' => 'required',
            'body' => 'required',
            'roomnum' => 'required',
            'type' => 'required'
        ]);
        //cover image
        if ($request->hasFile('cover_image')) {
            # get filename and extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$filenametoStore);

        } 
        //related image
        if ($request->hasFile('related_image')) {
            # get filename and extension
            $filenameWithExt = $request->file('related_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('related_image')->getClientOriginalExtension();
            //filename to store
            $filenametoStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('related_image')->storeAs('public/cover_images',$filenametoStore);
        }
        $room = Rooms::find($id);

        $room->body = $request->input('body');
        $room->price = $request->input('price');
        $room->roomnum = $request->input('roomnum');
        $room->type = $request->input('type');
        if ($request->hasFile('cover_image')) {
            $room->cover_image = $filenametoStore;
        }
        if ($request->hasFile('related_image')) {
            $room->cover_image = $filenametoStore;
        }


        $room->save();

        return redirect('/dashboard')->with('success' , 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $room = Rooms::find($id);
        if ($room->cover_image !== 'noimg.jpg') {
            # Delete image
            Storage::delete('public/cover_images/'.$room->cover_image);
        }
        if ($room->related_image !== 'noimg.jpg') {
            # Delete image
            Storage::delete('public/cover_images/'.$room->related_image);
        }

        $room->delete();

        return redirect('/dashboard')->with('success', 'Room Deleted');
    }
    

}
