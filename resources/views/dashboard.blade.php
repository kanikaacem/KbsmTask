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
   <h1 class="heading"> Dashboard </h1>
   @if (\Session::has('event_message'))
    <div class="alert alert-info" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
        {!! \Session::get('event_message') !!}
    </div>
  @endif
   
   <div class="button_div">
   <a class="action_button btn btn-primary" href="/agenda"> Create </a>
   <a class="action_button btn btn-primary" href="/logout" > Logout</a>
   </div>

   <h4 class="heading"> Events </h4>
   <table class="EventTable">
            <tr class="EventTableRow">
              <th class="tableData tableHeading">Event Name</th>
              <th class="tableData tableHeading">Event Description</th>
              <th class="tableData tableHeading">Event Category</th>
              <th class="tableData tableHeading">Start Date</th>
              <th class="tableData tableHeading">End Date</th>
              <th class="tableData tableHeading"> Action </th>
            </tr>
            @foreach($user_events as $event)
            <tr class="EventTableRow">
              <th class="tableData">{{$event->event_name}}</th>
              <th class="tableData">{{$event->event_description}}</th>
              <th class="tableData">{{$event->event_category}}</th>
              <th class="tableData">{{date('d-m-Y', strtotime($event->start_date))}}</th>
              <th class="tableData">{{date('d-m-Y', strtotime($event->end_date))}}</th>
              <th class="tableData">  
                  <a class="action_button btn btn-primary" href='edit/{{ $event->id }}'> Edit </a>
                  <a class="action_button btn btn-primary" href='delete/{{ $event->id }}' > Delete</a>
              </th>
            </tr>
            @endforeach
  </table>

  
  
 
  
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
   
   .button_div{
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    padding: 20px;
   }
   .action_button{
    text-decoration: none;
    color: white;
    border-radius: 5px;
    padding: 5px 10px;
    margin-right: 20px;
   }
   
   .EventTable{
    display: table;
    width: 70%;
    height:100%;
    table-layout: fixed;
    border-collapse: collapse;
    margin:20px auto;
   }
   .tableData{
    display:table-cell;
    width:100px;
    height:40px;
    border-bottom:1px solid black;
    text-align:center;
   }
   .alert-info{
      text-align:center;
      width: 50%;
      margin: 0 auto;
    }
</style>

