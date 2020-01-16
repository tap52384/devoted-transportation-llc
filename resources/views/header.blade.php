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

    <!-- Add your site or application content here -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" role="navigation" id="top-site-nav">
  <a class="navbar-brand" href="/">
    <img src="{{ asset('img/logo2.png') }}" alt="Logo" />
    <span>Devoted Transportation LLC</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<section class="home-main">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-6 my-auto">
                <h1 class="display-4 text-md-left">Transportation made <br />just for you.</h1>
                <p>
                    With a fleet of vehicles equipped to meet the needs of the
                    elderly, individuals with disabilities, and transportation
                    disadvantaged populations, we are available to get you where
                    you need to go.
                </p>
                <button type="button" class="btn btn-light btn-lg btn-block">
                    Schedule a Pickup Today
                </button>
            </div>
            <div class="col-md-6">
                <img src="{{ asset( 'img/nemt-van.png' ) }}" class="img-fluid" alt="nemt-van" />
            </div>
</div> <!-- /.row -->
        </div> <!-- /container -->
    </div> <!-- /.jumbotron-fluid -->
</section>

<section class="row">
    <div class="container">
        <h1 class="text-center mt-4" style="color: #35495e;">What is Non-Emergency Medical Transportation (NEMT)?</h1>
        <p>
        Medicaid non-emergency medical transportation (NEMT) is an important benefit
for beneficiaries who need to get to and from medical services but have no means of
transportation.
        </p>
        <p>

</p>
</div>
</section>

<section class="row">
    <div class="col-md-6">
</div>
<div class="col-md-6">
</div>
</section>

<section data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
    class="vc_row wpb_row vc_row-fluid  vc_custom_1572510095304   hongo-stretch-content vc_row-no-padding hongo-stretch-content-fluid"
    style="position: relative; left: -255px; box-sizing: border-box; width: 1680px;">
    <div class="wpb_column vc_column_container col-xs-mobile-fullwidth vc_col-sm-6 wow fadeIn animated"
        style="visibility: visible; animation-name: fadeIn;">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="shop-banner-unique-1 hongo-shop-banner-4 vc_custom_1567240678190">
                    <div class="hongo-shop-banner-content">
                        <div class="shop-banner-sub-title alt-font">New collection</div>
                        <div class="shop-banner-title hongo_font_1567240678170 alt-font">Wooden<br>Lamps</div><a
                            class="btn-link alt-font btn-medium" href="http://hongo.themezaa.com/furniture/shop/"
                            target="_self">MORE COLLECTION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container col-xs-mobile-fullwidth vc_col-sm-6 wow fadeIn animated"
        style="visibility: visible; animation-name: fadeIn;">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="shop-banner-unique-2 hongo-shop-banner-4 vc_custom_1567240692110">
                    <div class="hongo-shop-banner-content">
                        <div class="shop-banner-sub-title alt-font">New collection</div>
                        <div class="shop-banner-title hongo_font_1567240692090 alt-font">Modern<br>Design</div><a
                            class="btn-link alt-font btn-medium" href="http://hongo.themezaa.com/furniture/shop/"
                            target="_self">MORE COLLECTION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
