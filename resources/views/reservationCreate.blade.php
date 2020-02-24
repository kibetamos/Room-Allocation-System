@extends('index')
@section('title', 'Create reservation')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
           
        </div>
       
        <div class="card-body">          
         <h5 class="card-title"></h5>

         
            
            <label for="staff">Room:</label>
                            
                            
            <form action="{{url('reservation') }}" method="POST">
                @csrf
                <div class="row">

  <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
        </tr>
        
                 <div class="col-sm-8">
                        <div class="form-group">
                            <label for="staff">Department:</label>
                            <input class="form-control" name="department"required>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="staff">Number of Staff:</label>
                            <input class="form-control" name="staff"required>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="start">Start Time:</label>
                            <input type = "datetime-local" class="form-control"name="start">
                        </div>
                    </div>
                    
                     <div class="col-sm-8">
                        <div class="form-group">
                            <label for="End">End Time</label>
                            <input id="dates"type="datetime-local" class="form-control" name="end"required>
                        </div>
                    </div>
                   <div class="col-sm-8">
                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input class="form-control" name="purpose"required>
                        </div>
                    </div>

                    
                <button type="submit" class="btn btn-lg btn-primary">Book it</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
<script>
          $("#dates").datepicker({
    minDate: 0
});

</script>