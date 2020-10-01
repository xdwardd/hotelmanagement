
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-outline-primary" href="/create">Add Room</a>  <a class="btn btn-outline-success" href="/book">View Booking</a>
                    <hr>
                    <h3>Rooms Created</h3>
                     @if (count($rooms) > 0)
                    <table class="table table-striped">
                            <tr>
                                <td>Room No</td>
                                <td></td>
                                <td></td>
                            </tr>
                           
                            @foreach ($rooms as $room)
                            <tr>
                                <td>{{$room->roomnum}}</td>
                                <td><a class="btn btn-secondary" href="/edit/{{$room->id}}">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['HotelController@destroy', $room->id], 'method'=> 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    @else
                    <p>You have no Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

           