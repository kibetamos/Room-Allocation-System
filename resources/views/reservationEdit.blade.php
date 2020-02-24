<!-- resources/views/dashboard/reservationEdit.blade.php -->
@extends('index')
@section('title', 'Edit Reservation')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edit Allocation</h1>

     
           @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{route('reservation') }}" method="POST">
           
            
 <div class="row">
    <form method="post" action="{{action('ReservationController@update', $reservation->id)}}" >
        {{csrf_field()}}
            @csrf
        @method('PUT')
         <div class="col-sm-8">
                        <div class="form-group">
        <input name="_method" type="hidden" value="GET">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Department:</label>
            <input type="text" class="form-control" name="department" value={{$reservation->department}} />
        </div>
    </div>
</div>

 <div class="col-sm-8">
                        <div class="form-group">
        <div class="form-group">
            <div>
            <label for="staff">Staff Number:</label>
             <input type="text" class="form-control" name="staff"value={{$reservation->staff}} />
        </div>
    </div>
</div>
</div>
 <div class="col-sm-8">
                        <div class="form-group">
            <div class="form-group">
                <label for="start">Start:</label>
                <input type="datetime-local" class="form-control" name="start"required value={{$reservation->start}}  />
            </div>
            <div class="form-group">
                <label for="end">End:</label>
                <input type="datetime-local" class="form-control" name="end"required value={{$reservation->end}}/>
            </div>
</div>
</div>
 <div class="col-sm-8">
                        <div class="form-group">
            <div class="form-group">
                <label for="end">Purpose:</label>
                <input type="text" class="form-control" name="purpose"value={{$reservation->purpose}}/>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
                        <div class="form-group"> 
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</div>
        </form>
    </div>
</div>
@endsection
         
       
