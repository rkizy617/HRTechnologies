<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/nav.css'); }}">
    <title>Layout</title>
</head>
<body>
    <div class="navbar">
        <a href="#">Company updates</a>
        <a href="#">Job History</a>
        <a href="#">Update personal info</a>
        <div class="dropdown">
          <button class="dropbtn">Manage work
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">Clock in and out</a>
            <a href="#">Accept and update assignments</a>
            <a href="#">Communicate with managemen</a>
            <a href="#">pay statements</a>
            <a href="#">Look up schedule</a>
          </div>
        </div>
        <div class="logout">   
            <a href="#logout">Log out</a>
            </div>
        </div>
    @yield('content')
    
</body>
</html>
