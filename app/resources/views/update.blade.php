@extends('LayoutHR')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/logins.css'); }}">
    <title>Login - HRTechnologies</title>
</head>

<body>
    @section('content')
<div class="main">
    <div class="imgcontainer">
        
    </div>

    <form method="post" action="http://localhost:9300/">
        @CSRF
    <div class="login-form">
        <img src="images/logo.PNG">
        <h1>Update Personal Info</h1>

            <input type="uname" class="input-box" placeholder="Name" required>
            <input type="uname" class=input-box placeholder="Address" required>
            <input type="uname" class=input-box placeholder="Phone Number" required>
            <input type="uname" class=input-box placeholder="Gender" required>
            <button type="submit" class="login-button">SUBMIT</button>
            <hr>
    </form>
    </div>
    @endsection
</body>
</html>