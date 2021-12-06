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
        <a href="/"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
          <i class="material-icons-outlined" onclick="hideMenu()">cancel</i>
          <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/login">log in</a></li>
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
<!--
    <div class="navbar">
        <a href="/">Company updates</a>
        <a href="#">Job History</a>
        <a href="/update">Update personal info</a>
        <div class="dropdown">
          <button class="dropbtn">Staff management
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/schedule">Schedule employees</a>
            <a href="/AssignEmployees">Assign employees</a>
            <a href="/contact">Give feedback to employees </a>
            <a href="#">Employee Database</a>
          </div>
        </div>
        <div class="logout">
            <a href="/login">Log out</a>
            </div>
        </div>
    -->
    @yield('content')

</body>
</html>
