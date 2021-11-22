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
          <button class="dropbtn">Staff management
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/AssignEmployees">Assign employees</a>
            <a href="#">Hire employees</a>
            <a href="#">Give feedback to employees </a>
            <a href="#">Schedule employees</a>
            <a href="#">Set up payroll</a>
            <a href="#">Pull up employee database</a>
            <a href="#">Schedule meetings</a>
          </div>
        </div>
        <div class="logout">   
            <a href="#logout">Log out</a>
            </div>
        </div>
    @yield('content')
    
</body>
</html>
