@extends('LayoutHR')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }}">
    <title>Personal Info</title>
</head>

<body>

    @section('content')
<div class="main">
    <h1>Personal Info</h1>
    <div class="imgcontainer">
        <img src="images/HRLOGO.png" alt="logo" class="avatar">
    </div>

  <h3>Use these links below to update/view your personal information</h3>
  <p><a href="summary.html">Employee Summary</a></p>
  <p><a href="name.html">Name</a></p>
  <p><a href="address.html">Address</a></p>
  <p><a href="phone.html">Phone Number</a></p>
  <p><a href="gender.html">Gender</a></p>
  <p><a href="emergency.html">Emergency Contacts</a></p>
  <p><a href="private.html">Private Info</a></p>
  <p><a href="personal.html">Other Personal Info</a></p>
</div>
    @endsection
</body>

</html>
