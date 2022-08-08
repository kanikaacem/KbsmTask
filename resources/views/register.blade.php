<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>KSBM</title>
  </head>
  <body>
   <h1 class="heading"> Register</h1>
   @if (\Session::has('already_registered'))
    <div class="alert alert-info">
        {!! \Session::get('already_registered') !!}
    </div>
  @endif
   <form id="registration_form"  method="POST" action="{{ url('register')  }}">
   @csrf
   
   <div class="mb-3 row">
    <label for="Name" class="col-sm-4 col-form-label">Name</label>
    <div class="col-sm-12">
    <input type="text" name="name" class="form-control" id="inputPassword" value="{{ old('name') }}">
    @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
    @endif
    </div>
    </div>

   <div class="mb-3 row">
    <label for="Email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-12">
    <input type="email" name="email" class="form-control" id="inputPassword" value="{{ old('email') }}">
    </div>
    @if($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div>
    @endif
  </div>
  <div class="mb-3 row">
    <label for="MobileNumber" class="col-sm-4 col-form-label">Mobile Number</label>
    <div class="col-sm-12">
    <input type="number" name="mobile_number" class="form-control" id="inputPassword" value="{{ old('mobile_number') }}">
    </div>
    @if($errors->has('mobile_number'))
    <div class="error">{{ $errors->first('mobile_number') }}</div>
    @endif
  </div>
  <div class="mb-3 row">
    <label for="Password" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-12">
      <input type="password" name="password" class="form-control" id="inputPassword" value="{{ old('password') }}">
    </div>
    @if($errors->has('password'))
    <div class="error">{{ $errors->first('password') }}</div>
    @endif
  </div>
  <button type="submit"  class="btn btn-primary">Register</button>

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
    #registration_form{
        width: 40%;
        margin: 0 auto;
       
    }
    .error{
        color:red;
    }
    .alert-info{
      text-align:center;
      width: 50%;
      margin: 0 auto;
    }
</style>


