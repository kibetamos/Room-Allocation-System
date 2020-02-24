@extends('layouts.app')
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").on({
    mouseenter: function(){
      $(this).css("background-color", "lightgray");
    },  
    mouseleave: function(){
      $(this).css("background-color", "lightblue");
    }, 
    click: function(){
      $(this).css("background-color", "yellow");
    }  
  });
});
</script>
</head>
<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1600x900/?nature')">
@section('content')

<div class="container">
    
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are logged in!
                </div>

                <div>
                  <a href="/rooms" class="btn btn-success btn-lg my-2">Schedule meeting here</a>
                </div>
                
            </div>

    </div>

        </div>

</div>
<div>
</div>
</div>
</div>
     <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Schedule all your meetings with only one click and the room is reserved for you</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Time saving</h5>
                    <p class="card-text">You do not have to walk around anymore.Just one click and you are aware of the days you can schedule your meetings.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Easy to use</h5>
                    <p class="card-text">Book and manage with the click of a button</p>
                </div>
            </div>
        </div>
    </div>
</div>
 @include('footer')
@endsection
