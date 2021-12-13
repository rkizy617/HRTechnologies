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
    @yield('content')
</body>
</html>
