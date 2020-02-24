@extends('index')
@section('title', 'Reservations')
@section('content')
<div class="container mt-5">
    <h2>Your Reservations</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">ID</th>
           
            <th scope="col">Department</th>
            <th scope="col">Staff</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">Purpose</th>
            <th scope="col">manage</th>
             <th scope="col">manage</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $reservations as $reservations)
            
            <tr>
                <td>{{ $reservations->id }}</td>

                <td>{{ $reservations->department }}</td>
                <td>{{ $reservations->staff }}</td>
                <td>{{ $reservations->start }}</td>
                <td>{{ $reservations->end }}</td>
                <td>{{ $reservations->purpose }}</td>
               
            <td><a href="{{action('ReservationController@edit',$reservations->id)}}" class="btn btn-primary">Edit</a></td>

          <td> <form action="{{action('ReservationController@destroy', $reservations->id)}}" method="post"onSubmit="return confirm('Are you sure to delete?')">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach          
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>

@endsection