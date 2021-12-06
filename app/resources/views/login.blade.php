
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
    <form method="post" action="localhost:9300/">

    <div class="login-form">
        <img src="images/logo.PNG">
        <h1>USER LOGIN</h1>
        <form>
            <input type="uname" class="input-box" placeholder="USERNAME" required>
            <input type="password" class=input-box placeholder="PASSWORD" required>
            <button type="button" class="login-button"><a href="/">LOGIN</a></button>
            <p><a href="">Forgot Password?</a></p>
            <hr>
            <p>Need an account? <a href="/signup">SIGN UP</a></p>
        </form>
    </div>
    
</body>
</html>
