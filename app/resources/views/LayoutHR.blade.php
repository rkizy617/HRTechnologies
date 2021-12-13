<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/nav.css'); }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <title>Layout</title>
</head>
<body>
  <section class="header">
      <nav>
        <a href="/home2"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
          <i class="material-icons-outlined" onclick="hideMenu()">cancel</i>
          <ul>
            <li><a href="/home2">HOME</a></li>
            <li><a href="#">Job History</a></li>
            <li><a href="/update">manage profile</a></li>
            <div class="dropdown">
            <li><button class="dropbtn">Staff management</button></li>
              <div class="dropdown-content">
              <a href="/schedule">Schedule employees</a>
              <a href="/AssignEmployees">Assign employees</a>
              <a href="/contact">Contact</a>
              <a href="#">Employee Database</a>
              </div>
            </div>
            @if(isset($users))
            Welcome, {{$users['username']}}!
                <li><a href="/logout">log out</a></li>
            @else
                Username/password not found, please try again:
                <li><a href="/login">login</a></li>
            @endif

          </ul>
        </div>
        <i class="material-icons-outlined" onclick="showMenu()">menu</i>
      </nav>
    </section>

    <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu(){
        navLinks.style.right ="0";
      }
      function hideMenu(){
        navLinks.style.right="-180px";
      }
    </script>
    @yield('content')

</body>
</html>
