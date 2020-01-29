@extends('master')

@section('content')

@include(
    'subheader',
    [
        'subheaderBg' => 'contact-us.jpg',
        'subheaderText' => 'Contact Us'
    ]
)

<section class="contact-info-list">
    <div class="container">
    <div class="separator-style-2"></div>
    <p class="lead">We would love to hear from you</p>
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-globe" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="text-bold">ADDRESS DETAILS</span><br />
            <span>123 Anywhere Street</span><br />
            <span>Somewhere, NC 27809</span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-globe" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="text-bold">Email Address</span><br />
            <span>
                <a href="mailto:info@devotedtransportationllc.com">
                    info@devotedtransportationllc.com
                </a>
            </span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-globe" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="text-bold">Telephone Number</span><br />
            <span>
                <a href="tel:+19191234567">
                    (919) 123-4567
                </a>
            </span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-globe" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="text-bold">Hours of Operation</span><br />
            <span>
                <span>Monday – Friday: 09:00AM – 10:00PM</span><br />
                <span>Sunday &amp; Saturday: 10:30AM – 11:00PM</span>
            </span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<section class="contact-us-pre-form-picture">
</section>


@endsection
