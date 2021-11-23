@extends('LayoutHR')
<!DOCTYPE html>
<html>
    @section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }}">
    <title>CONTACT</title>
</head>

<body>

<div class="main">
  <h1>Contact</h1>
  <div class="imgcontainer">
    <img src="images/HRLOGO.png" alt="logo" class="avatar">
</div>
  <h3>Use these links below to reach your teammates</h3>
  <h4>Management</h4>
  <p><a href="mailto:GM@company.com">General Manager</a></p>
  <p>&ensp;Your general manager can help with any inquiries you may have.</p>
  <p><a href="mailto:HR@company.com">Human Resources Manager</a></p>
  <p>&ensp;Your human resources manager can help with any personal matters or confidential matters.</p>
  <p><a href="mailto:DP@company.com">Department Manager</a></p>
  <p>&ensp;Your department manager can help with everyday tasks and smaller inquiries needing quick resolutions.</p>

  <h4>Inbox</h4>
  <p>Coming soon!</p>
</div>
</body>
@endsection
</html>
