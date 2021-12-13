<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - HRTechnologies</title>
  <link rel="stylesheet" href="{{ URL::asset('css/logins.css'); }}">
</head>
<body>
  <div class="signup-form">
  <img src="images/logo.PNG">
    <h1>Please complete the following:</h1>
  <div class="container">
    <form action="http://localhost:9300/signup" method="POST">
        @csrf
      <fieldset>
        <div class="row-1">
            <label for="form-fname">First Name</label>
            <input type="text" id="fname" name="firstname" required>
            <label for="form-lname">Last Name</label>
            <input type="text" id="lname" name="lastname" required>
        </div>
        <div class="row-2">
            <label for="form-birthdate">Birthdate</label>
            <select id="month" name="month">
              <option value="">Select</option>
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
            </select>
            <select id="day" name="day">
              <option value="">Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
            <label for="form-year">Year</label>
            <input type="text" id="year" name="year" required>
        </div>
        <div class="row-3">
          <label for="form-email">Email Address</label>
          <input type="email" id="email" name="emailaddress" required>
        </div>
        <div class="row-4">
          <label for="form-uname">Create Username</label>
          <input type="text" id="uname" name="username" required><br>
          <label for="form-pword">Create Password</label>
          <input type="password" id="pword" name="password" required>
        </div>
        <div class="row-5">
          <input type="submit" value="Submit">
        </div>
      </fieldset>
    </form>

  </div>


</div>
</body>
</html>
