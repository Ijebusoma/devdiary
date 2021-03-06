<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DEVDIARY</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

        <script type="text/javascript" src="{{URL::asset('assets/js/ball.js')}}"></script>
        <link href="css/notebook.css" rel="stylesheet" type="text/css" />
        <!-- Styles -->
        <style>
            html, body {
               /** background-color: #A2CADB  ;
                color:  #6F4E37;
                **/
                font-family: 'Pacifico', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            h3
            {
                font-family: 'Raleway', sans-serif;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #6F4E37;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #mycanvas {
                position: absolute;
                margin: auto;
                width: 312px;
                height: 312px;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
            }

        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/dashboard') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md">
                    <canvas id="mycanvas"></canvas>
                    <h2 class="devdiary">DEVDIARY</h2>
                </div>

                <div class="links">
                    <h3>Your personal programming documentation...</h3>
                </div>
            </div>

                <div id="slider">
                    <div id="tooplate_wrapper">
                        <div id="tooplate_sidebar">

                            <div id="header">
                                <h1><a href="#"><img src="" title="Notebook " alt=""> </a></h1>
                            </div>
    </body>
</html>
