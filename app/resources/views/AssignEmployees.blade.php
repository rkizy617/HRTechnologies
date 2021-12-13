@extends('LayoutHR')
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/HRLOGO.png">
        <link rel="stylesheet" href="{{ URL::asset('css/AssignE.css'); }}">
        <title>Assign Employees - HRTechnologies</title>
    </head>



    @section('content')
    <h1> Assign Employees</h1>
    <div class="imgcontainer">
        <!--<img src="images/logo.png" alt="logo" class="avatar">-->
    </div>
    <div class="container">
        <form method="post" action="http://localhost:9300/home2">
        @csrf
          <label for="name">Assignor Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">

          <label for="ename">Employee Name</label>
          <input type="text" id="ename" name="employename" placeholder="Employe Name">

          <label for="department">Department</label>
          <select id="department" name="department">
            <option value="CS">CS</option>
            <option value="IT">IT</option>
            <option value="Business">Business</option>
          </select>

          <label for="Assignment">Assignment</label>
          <textarea id="assignment" name="assignment" placeholder="Write something.." style="height:200px"></textarea>

          <input type="submit" value="Assign">

        </form>
      </div>
        @endsection
    </body>

    </html>

