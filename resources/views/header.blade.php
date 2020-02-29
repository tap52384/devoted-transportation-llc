<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome 4.7.0 CDN -->
    <!-- https://fontawesome.com/v4.7.0/icons/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <meta name="theme-color" content="#fafafa">

    <!-- https://laravel.com/docs/6.x/csrf#csrf-x-csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <header>
    <div class="bg-dark collapse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-2">
            <h4 class="text-white"></h4>
            <ul class="list-unstyled">
                <li>
                    <a href="/" title="Home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/about-us" title="About Us">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="/faq" title="FAQ">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="/contact-us" title="Contact Us">
                        Contact Us
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container d-flex justify-content-between pl-0">
        <a href="/" class="navbar-brand d-flex align-items-center mr-0 py-0">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 8100 3690" preserveAspectRatio="xMidYMid meet">
            <g id="layer102">
                <path
                    d="M720 3629 c68 -64 181 -157 623 -514 147 -119 267 -218 267 -220 0 -2 97 -277 215 -611 119 -335 214 -614 213 -620 -2 -6 -196 -168 -433 -359 -236 -191 -432 -349 -434 -351 -2 -2 599 -4 1336 -4 l1341 0 -63 168 c-34 92 -79 217 -100 277 -20 61 -45 128 -55 150 -9 22 -34 87 -54 145 -21 58 -55 151 -77 206 -21 56 -39 108 -39 116 0 8 -4 18 -9 24 -4 5 -15 29 -24 54 -69 196 -91 256 -98 265 -5 5 -9 16 -9 25 -1 8 -9 33 -20 55 -11 22 -20 47 -20 55 0 8 -9 33 -20 55 -11 22 -19 45 -20 52 0 7 -7 29 -16 50 -9 21 -20 47 -24 58 -4 11 -17 45 -29 75 -26 68 -27 85 -3 75 9 -4 32 -11 51 -15 38 -10 74 -41 140 -125 50 -63 61 -93 434 -1205 21 -63 81 -238 133 -389 52 -151 94 -276 94 -278 0 -1 -673 -3 -1495 -3 l-1494 0 -428 -347 c-406 -328 -576 -466 -597 -485 -6 -4 1815 -8 4045 -8 l4054 1 -30 26 c-16 14 -46 40 -65 57 -19 18 -43 35 -52 39 -10 3 -18 13 -18 22 0 8 -6 15 -13 15 -14 0 -43 22 -126 94 -31 26 -67 56 -81 64 -14 9 -34 27 -45 39 -11 13 -25 23 -30 23 -6 0 -29 17 -51 38 -23 20 -59 51 -80 67 -21 17 -49 40 -61 53 -13 12 -26 22 -29 22 -3 0 -11 6 -18 13 -7 6 -30 26 -52 42 -93 73 -169 137 -172 146 -2 5 -8 9 -14 9 -5 0 -36 20 -67 45 l-58 46 -736 -3 -735 -3 -52 154 c-48 140 -393 1084 -670 1831 -63 168 -117 307 -122 308 -4 2 -6 8 -2 13 3 5 0 9 -6 9 -7 0 -9 7 -6 16 3 8 2 13 -3 9 -5 -3 -18 10 -30 28 -28 46 -134 145 -210 196 -142 97 -369 186 -604 238 l-122 27 -1545 3 -1545 3 65 -61z" />
                <path
                    d="M4235 3671 c175 -48 309 -139 386 -258 16 -26 29 -42 29 -36 0 13 -45 80 -79 117 -75 82 -257 178 -362 191 -33 4 -26 1 26 -14z" />
            </g>
        </svg>
          <span>Devoted Transportation</span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span>Menu</span>
        </button>
      </div>
    </div>
  </header>
