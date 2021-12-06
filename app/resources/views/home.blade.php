@extends('LayoutHR')
<!--Home page-->
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css'); }}">
        <title> Home - HRTechnologies</title>
    </head>
    <body>
    @section('content')
    <h1>Welcome to HRTechnolgies!</h1>
        <div class="main">
            <h2>Meet the Team!</h2>
            <p>
                Ryan Kizy<br>
                Stephen Lewandowski<br>
                Humayun Rahman<br>
                Pasia Vang
            </p>
            <h2>Our Purpose</h2>
            <p>
                We wanted to create a webpage that would focus
                on the interactions between administrators and
                employees.
            </p>
        </div>
        @endsection
    </body>

    </html>

