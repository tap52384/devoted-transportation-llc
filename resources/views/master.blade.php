@include('header')

{{-- section/show can be replaced by section/endsection in child views --}}
@section('content')
<section class="home-main">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-6 my-auto">
                <h1 class="display-4 text-md-left">Transportation made <br />just for you.</h1>
                <p>
                    With a fleet of vehicles equipped to meet the needs of the
                    elderly, individuals with disabilities, and transportation-disadvantaged populations,
                    we are available to get you where you need to go.
                </p>
                <a href="/contact-us" role="button" class="btn btn-light btn-lg btn-block mb-2">
                    Call and schedule a pickup today
                </a>
            </div>
            <div class="col-md-6 my-auto">
                <img src="{{ asset( 'img/nemt-van.png' ) }}" class="img-fluid" alt="nemt-van" />
            </div>
</div> <!-- /.row -->
        </div> <!-- /container -->
    </div> <!-- /.jumbotron-fluid -->
</section>

<section class="row my-5 home-nemt-section px-2">
    <div class="container">
        <h1 class="text-center mt-4">What is Non-Emergency Medical Transportation (NEMT)?</h1>
        <p>
        Medicaid non-emergency medical transportation (NEMT) is an important benefit
for beneficiaries who need to get to and from medical services but have no means of
transportation.
        </p>
        <p>
        Patients may require NEMT for a variety of reasons, including: lack of a
        valid driver’s license, lack of a working vehicle, geographic isolation,
        or the inability to take traditional transportation for physical, mental,
        or developmental reasons.
        </p>
        <p>
        Devoted Transportation is an NEMT company whose mission is to deliver
        the highest customer services to our clients throughout Durham and the
        surrounding areas.
        </p>
        <div class="text-center">
            <a href="/about-us" role="button" class="btn btn-dark mb-3">
                Learn more about NEMT and how we can help
            </a>
        </div>
    </div> <!-- /.container -->
</section>

<section class="row two-tone-section my-5">
        <div class="col-md-6 left-side py-3 px-4">
            <div class="row">
                <div class="col-md-12 my-1 col-lg-6">
                    <h1 class="text-center text-md-left">CPR certified. First Aid kits ready.</h1>
                    <p>All of our drivers are trained and equipped to provide
                    urgent treatment until first responders arrive. Our company uses
                    specially-designed vehicles to accommodate a variety of
                    needs to make transportation safe and comfortable.</p>
                </div>
                <div class="text-center col-md-12 col-lg-6 mb-2 mx-sm-5 mx-md-0 my-lg-auto">
                    <img src="{{ asset( 'img/cpr-heart.png' ) }}" class="img-fluid-half" alt="CPR certified" />
                </div>
                <a href="/about-us" role="button" class="btn btn-dark btn-block mb-3 mx-3">See how prepared we are for you</a>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-6.left-side -->
        <div class="col-md-6 right-side py-3 px-4">
            <div class="row">
                <div class="col-md-12 my-1 col-lg-6">
                    <h1 class="text-center text-md-left">No more missed doctor's appointments.</h1>
                    <p>More than 3.5 million people miss doctor's appointments
                    each year. Our drivers arrive early to make sure that you
                    get to your destinations on time, every time.</p>
                </div>
                <div class="text-center col-md-12 col-lg-6 mb-2 mx-sm-5 mx-md-0 my-lg-auto">
                    <img src="{{ asset( 'img/clock-logo-black.png' ) }}" class="img-fluid-half" alt="Always on time!" />
                </div>
                <a href="/contact-us" role="button" class="btn btn-dark btn-block mb-3 mx-3">Choose Devoted to get there on time</a>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-6.left-side -->
</section>

{{-- <section class="container-fluid two-tone-section my-5">
    <div class="row row-cols-2">
        <div class="col left-side">
            <h1 class="text-center text-md-left">CPR certified. First Aid kits ready.</h1>
                <p class="mb-sm-1">All of our drivers are trained and equipped to provide
                urgent treatment until first responders arrive. Our company uses
                specially-designed vehicles to accommodate a variety of
                needs to make transportation safe and comfortable.</p>
                <img src="{{ asset( 'img/cpr-heart.png' ) }}" class="img-fluid-half" alt="CPR certified" />
        </div> <!-- /.col -->
        <div class="col right-side">
            <h1 class="text-center text-md-left">No more missed doctor's appointments.</h1>
                <p class="mb-sm-4">More than 3.5 million people miss doctor's appointments
                each year. Our drivers arrive early to make sure that you
                get to your destinations on time, every time.</p>
                <img src="{{ asset( 'img/clock-logo-black.png' ) }}" class="img-fluid-half" alt="Always on time!" />
        </div> <!-- /.col -->
    </div> <!-- /.row-cols-2 -->
</section> --}}

<section class="commercial-section text-center container my-5">
    <h1 class="text-center mt-4">Watch the video below to learn more!</h1>
    <!-- https://github.com/paulirish/lite-youtube-embed -->
    <!-- https://youtu.be/lqxewauIWB8 -->
    <lite-youtube videoid="lqxewauIWB8"></lite-youtube>
    <!-- <iframe width="792" height="446" src="https://www.youtube.com/embed/Bey4XXJAqS8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
</section>

<section class="home-trip-promo my-4 py-5">
    <div class="container py-3">
            <p class="font-weight-bold text-uppercase">New PROMO</p>
            <h1 class="text-center mb-3">Want take a vacation but need transportation? Now you can!</h1>
            <p class="mb-3">We are pleased to introduce a new service to our
                lineup--vacation trip planning! Planning a vacation now just got
                a lot easier.
            </p>
            <a href="/faq" role="button" class="btn btn-outline-light">
                Get more details about vacation trips and more
            </a>
    </div> <!-- /.container -->
</section>

@show

@include('footer')
