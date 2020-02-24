@extends('index')
@section('title', 'Create room')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
           
        </div>
       
        <div class="card-body">          
         <h5 class="card-title"></h5>

         
            
            <label for="staff">Room:</label>
                            
                            
            <form action="{{url('room') }}" method="POST">
                @csrf
                <div class="row">

<script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
        </tr>
        
                 <div class="col-sm-8">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control" name="name"required>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input class="textarea" name="description"required>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <input type = "form-control" class="form-control" name="type"required>
                        </div>
                    </div>
                    
                     <div class="col-sm-8">
                        <div class="form-group">
                            <label for="capacity">Capacity</label>
                            <input type="form-control" class="form-control" name="capacity"required>
                        </div>
                    </div>
                   

                <button type="submit" class="btn btn-lg btn-primary">Create a room now</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection