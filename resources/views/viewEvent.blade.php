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
   <div id="event_data">
   <h1 class="heading"> {{$Event->event_name}} </h1>
   <a class="action_button" href="/dashboard"> Back </a>
   <br><br><br>
   <h4> Event Category : </h4>
   <br>
   <span> {{$Event->event_category}}</span>
   <br><br><br>
   <h4> Event Description </h4>
   <br>
   <span> {{$Event->event_description}} </span>
   <br><br><br>
   <h4> Event Starting Date : </h4>
   <br>
   <span> {{date('d-m-Y', strtotime($Event->start_date))}}</span>
   <br><br><br>
   <h4> Event Ending Date : </h4>
   <br>
   <span> {{date('d-m-Y', strtotime($Event->end_date))}}</span>
   <br><br><br>
   <h4> Reoccuring Ending Date : </h4>
   <br>
   @if(in_array('today',explode(',' , $Event->event_category)))
   <ul>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +1 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +2 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +3 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +4 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +5 day'))}}</li>

   </ul>
   @elseif(in_array('week',explode(',' , $Event->event_category)))
   <ul>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +7 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +14 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +21 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +28 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +35 day'))}}</li>

   </ul>
   @elseif(in_array('month',explode(',' , $Event->event_category)))
   <ul>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +30 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +60 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +90 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +120 day'))}}</li>
    <li>  {{date('d-m-Y', strtotime($Event->start_date . ' +150 day'))}}</li>

   </ul>
   @endif
  
   </div>

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
    #event_data{
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
    .action_button{
      text-decoration: none;
      color: white;
      background: red;
      border-radius: 5px;
      padding: 5px 10px;
      display: inline-block;
      float: right;
      margin-right: 20px;
   }
   .action_button:hover{
    color:white;
   }
</style>