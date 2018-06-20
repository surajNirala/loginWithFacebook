<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
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


        .container {
        position: relative; 
        max-width: 800px; /* Maximum width */
        margin: 0 auto; /* Center it */
        }

        .container .content {
        position: absolute; /* Position the background text */
        bottom: 0; /* At the bottom. Use top:0 to append it to the top */
         /* Black background with 0.5 opacity */
        color: #f1f1f1; /* Grey text */
        width: 100%; /* Full width */
        padding: 20px; /* Some padding */
        }
        img {
    vertical-align: middle;
    margin-left: -176px;
}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                
                @if(isset($image))
                <img src="/images/frame.png" width="200" height="200">
                <img src="{{$image}}" alt="no" width="150" height="150">
                @else
                <img src="/images/frame.png" width="200" height="200">
                @endif
                <br>
                <br>
                @if(isset($name))
                <div class="link">
                    <label>Name:-</label>
                    <b><a href="">{{$name}}</a> |</b>
                    <label>Email:-</label>
                    <b><a href="">{{$email}}</a></b>

                </div>
                @endif
                <br>
                <br>
                <div class="row mg-btm">
                 <div class="col-md-12">
                    <a href="login/facebook" class="btn btn-primary btn-block">
                      <i class="icon-facebook"></i>    Login with Facebook
                    </a>
                </div>
                </div>
                <br>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
