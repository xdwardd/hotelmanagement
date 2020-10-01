@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Add Available Rooms</h1>

        {!!Form::open(['action' => ['HotelController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data'] )!!}
            <div class="form-group">
                {{Form::label('roomnum', 'Room No.')}}
                {{Form::text('roomnum', '', ['class' => 'form-control', 'placeholder' => 'Enter Room No.'])}}
            </div>
            <div class="form-group">
                {{Form::label('type', 'Room Type.')}}
                {{Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'Enter Room Type'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Room Description')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Room Description'])}}
            </div>
             <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Enter Price'])}}
            </div>
            <div>
                {{Form::label('cover_image', 'Room Image')}}
            </div>
            <div>
                {{Form::file('cover_image')}}
            </div>
            <div class="mt-2">
                {{Form::label('related_image', 'Related Image')}}
            </div>
            <div>
                {{Form::file('related_image')}}
            </div>

            <div class="mt-4">
                {{Form::submit('Submit', ['class' => 'btn btn-outline-primary'])}}
                <a class="btn btn-danger float-right" href="/home">Cancel</a>
            </div>    
        {!!Form::close()!!}
    </div>
   
@endsection