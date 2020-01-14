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
<text kerning="auto" font-family="Myriad Pro" fill="rgb(0, 0, 0)" font-size="58.333px" x="39px" y="450.859px"><tspan font-size="58.333px" font-family="Avenir Next" fill="#636B6F">Devoted&#32;Transportation&#32;LLC</tspan></text>
<image  x="0px" y="383px" width="810px" height="10px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyoAAAAKAQMAAABhQzgvAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABlBMVEVja2////+mHkMgAAAAAWJLR0QB/wIt3gAAAAd0SU1FB+QBDAoQIT2L4uUAAAARSURBVDjLY2AYBaNgFIxsAAAEBgAB0wkOXgAAAABJRU5ErkJggg==" />
<image  x="0px" y="0px" width="810px" height="369px"  xlink:href="data:img/png;base64,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" />
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
