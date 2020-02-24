@extends('index')
@section('title', 'rooms')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through rooms returned from controller -->
        <div class="container mt-5">
    <h2>Rooms available for booking</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Room</th>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            <th scope="col">Capacity</th>
            <th scope="col">Activity</th>
            </tr>
        </thead>

        <tbody>

        @foreach ($rooms as $room)
        <tr>
            <td>{{$room->id}}</td>
             <td>{{$room->name}}</td>
              <td>{{$room->description}}</td>
               <td>{{$room->type}}</td>
                <td>{{$room->capacity}}</td>
            
<td><a href="reservationCreate" class="btn btn-primary"value="{{$room->name}}">Book Now</a></td>
 <td> <form action="{{action('RoomController@destroy', $room->id)}}"  method="post"onSubmit="return confirm('Are you sure to delete?')">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>




        </tr>
    </tbody>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection