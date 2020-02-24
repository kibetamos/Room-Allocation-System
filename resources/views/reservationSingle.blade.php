<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Edit Reservation')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        <div class="container mt-5">
   <div class="card-header">
            <h2>You're all booked for the {{ $roomInfo->name }} in {{ $roomInfo->type }}!</h2>
        </div>
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
                 <td><a href="reservationEdit/edit/{{ $room->id }}" class="btn btn-primary">Book Now</a></td>
            





        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>


                        </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $roomInfo->name }} - <small>{{ $roomlInfo-> description }}</small>
                        </h3>
                        <p class="card-text">{{ $room->description }}</p>
                        <p class="card-text"><strong>Arrival: </strong>{{ $reservation->arrival }}</p>
                        <p class="card-text"><strong>Departure: </strong>{{ $reservation->departure }}</p>
                        <p class="card-text"><strong>Room: </strong>{{ $reservation->room['type'] }}</p>
                        <p class="card-text"><strong>Guests: </strong>{{ $reservation->num_of_guests }}</p>
                        <p class="card-text"><strong>Price: </strong>${{ $reservation->room['price'] }}</p>
                    </div>                  
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">Edit this reservation</a>
                    <a href="/dashboard/reservations/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection