<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>KSBM</title>
  </head>
  <body>
   <h1 class="heading"> Add Event </h1>
  
   <form id="event_form"  method="POST" action="{{ url('add-event')  }}">
   @csrf
   <div class="form-check">
  <input class="form-check-input" name="category" type="checkbox" value="today" id="flexCheckDefault" checked>
  <label class="form-check-label" for="flexCheckDefault">
   Today
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" name="category" type="checkbox" value="week" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  This Week
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" name="category" type="checkbox" value="month" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   This Month
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" name="category" type="checkbox" value="year" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   This Year
  </label>
</div>

   <div class="mb-3 row">
    <label for="Event" class="col-sm-4 col-form-label">Event Name</label>
    <div class="col-sm-12">
    <input type="text" name="event_name" class="form-control" id="inputPassword" value="{{ old('event_name') }}">
    </div>
    @if($errors->has('event_name'))
    <div class="error">{{ $errors->first('event_name') }}</div>
    @endif
  </div>
 
  <div class="mb-3 row">
    <label for="Description" class="col-sm-4 col-form-label">Event Description</label>
    <div class="col-sm-12">
      <input type="text" name="event_description" class="form-control" id="inputPassword" value="{{ old('event_description') }}">
    </div>
    @if($errors->has('event_description'))
    <div class="error">{{ $errors->first('event_description') }}</div>
    @endif
  </div>

  <div class="mb-3 row">
    <label for="Description" class="col-sm-4 col-form-label">Start Date</label>
    <div class="col-sm-12">
    <input type="date" name="start_date" class="form-control" id="inputPassword" value="{{ old('start_date') }}">
 </div>
    @if($errors->has('start_date'))
    <div class="error">{{ $errors->first('start_date') }}</div>
    @endif
  </div>

  <div class="mb-3 row">
    <label for="end_date" class="col-sm-4 col-form-label">Event Description</label>
    <div class="col-sm-12">
      <input type="date" name="end_date" class="form-control" id="inputPassword" value="{{ old('end_date') }}">
    </div>
    @if($errors->has('end_date'))
    <div class="error">{{ $errors->first('end_date') }}</div>
    @endif
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<style>
    .heading{
        text-align:center;
        margin:10px 0;
        color:red;
    }
    #event_form{
      width: 40%;
      margin: 0 auto;
     }
    .error{
        color:red;
    }
    .alert-info{
      text-align:center;
    }
</style>