<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Petinder</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .navbar-header a,.navbar-right li a {
                padding-top:4px;
            }
            .fa-user,.fa-comment {
                color:black;
                font-size:40px;
            }
            .navbar-right li a {

            }
            .img {
                display: flex;
                justify-content: center;
            }
            .img .img-box {
                width: 260px;
                height: 260px;
                overflow: hidden;
                justify-content: center;
                display: flex;
            }
            .img .img-box img {
                height: 100%;
                width: auto;       
            }
            button {
                border-radius: 50px;
                height: 70px;
                width: 70px;
            }
            button.deslike i{
                color:red;
                font-size:40px;
            }
            button.superlike i{
                color:blue;
                font-size:40px;
            }
            button.like i{
                color:green;
                font-size:40px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .navbar-default{
                background:#fff;
                border-bottom:1px solid grey;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .container{
                display:flex;
                justify-content: space-between;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            img { 
                display: block; 
                width: 40px; 
                height: 40px; 
                margin: auto; 
    
            } 
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/perfil"><i class="fa fa-user" aria-hidden="true"></i></a>
                </div>
                <div>
                    <a href="/"><img src="/img/dog.png" alt="Logo Petinder"> </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/mensagem"><i class="fa fa-comment" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="img">
                    <div class="img-box">
                        <img src="https://ei.marketwatch.com/Multimedia/2020/04/09/Photos/ZQ/MW-IE203_corona_20200409232441_ZQ.jpg?uuid=d12f4334-7ada-11ea-b13a-9c8e992d421e">
                    </div>
                </div>
                <div class="title m-b-md">
                    Mensagem    
                </div>
                <h1>lulu-da-pomerânia</h1>
                <h3>Gosto de brincar, pular e destruir almofadas</h3>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <button class="deslike"><i class="fa fa-times" aria-hidden="true"></i></button>
                <button class="superlike"><i class="fa fa-star" aria-hidden="true"></i></button>
                <button class="like"><i class="fa fa-heart" aria-hidden="true"></i></button>
            </div>
        </nav>
    </body>
</html>
