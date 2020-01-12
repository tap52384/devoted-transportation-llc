<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <svg
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="810px" height="465px">
<image  x="0px" y="0px" width="810px" height="369px"  xlink:href="data:img/png;base64,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" />
<text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="58.333px" x="39px" y="450.859px"><tspan font-size="58.333px" font-family="Avenir Next" fill="#636B6F">Devoted&#32;Transportation&#32;LLC</tspan></text>
<image  x="0px" y="383px" width="810px" height="10px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyoAAAAKAQMAAABhQzgvAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABlBMVEVja2////+mHkMgAAAAAWJLR0QB/wIt3gAAAAd0SU1FB+QBCxQ4NIZkHmcAAAARSURBVDjLY2AYBaNgFIxsAAAEBgAB0wkOXgAAAABJRU5ErkJggg==" />
</svg>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
