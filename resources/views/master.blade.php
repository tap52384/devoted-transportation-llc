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
                    elderly, individuals with disabilities, and transportation
                    disadvantaged populations, we are available to get you where
                    you need to go.
                </p>
                <a href="#" type="button" class="btn btn-light btn-lg btn-block">
                    Schedule a Pickup Today
                </a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset( 'img/nemt-van.png' ) }}" class="img-fluid" alt="nemt-van" />
            </div>
</div> <!-- /.row -->
        </div> <!-- /container -->
    </div> <!-- /.jumbotron-fluid -->
</section>

<section class="row my-5">
    <div class="container">
        <h1 class="text-center mt-4" style="color: #35495e;">What is Non-Emergency Medical Transportation (NEMT)?</h1>
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
            <a href="#" class="btn btn-dark mb-3">
                Learn more about NEMT and how we can help
            </a>
        </div>
    </div> <!-- /.container -->
</section>

<section class="container-fluid two-tone-section my-5">
    <div class="row">
        <div class="col-md-6 left-side">
            <div class="row">
                <div class="col-md-6 my-auto px-md-5">
                    <h1 class="text-md-left">CPR certified.<br />First Aid kits ready.</h1>
                    <p>All of our drivers are trained and equipped to provide
                    the best assistance until first responders arrive.</p>
                    <a href="#" class="btn btn-dark btn-block mb-3">See how we can serve you</a>
                </div>
                <div class="col-md-6 my-auto px-md-5 text-center">
                    <img src="{{ asset( 'img/cpr-heart.png' ) }}" class="img-fluid" alt="cpr certified" />
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-6.left-side -->
        <div class="col-md-6 right-side">
            <div class="row">
                <div class="col-md-6 my-auto px-md-5">
                    <h1 class="text-md-left">CPR certified.<br />First Aid kits ready.</h1>
                    <p>All of our drivers are trained and equipped to provide
                    the best assistance until first responders arrive.</p>
                    <a href="#" class="btn btn-dark btn-block mb-3">See how we can serve you</a>
                </div>
                <div class="col-md-6 my-auto px-md-5 text-center">
                    <img src="{{ asset( 'img/cpr-heart.png' ) }}" class="img-fluid" alt="cpr certified" />
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-6.left-side -->
    </div>
</section>

<section class="commercial-section text-center container mb-5">
    <h1 class="text-center mt-4" style="color: #48466d;">Watch the video below to learn more!</h1>
    <!-- https://github.com/paulirish/lite-youtube-embed -->
    <lite-youtube videoid="Bey4XXJAqS8"></lite-youtube>
    <!-- <iframe width="792" height="446" src="https://www.youtube.com/embed/Bey4XXJAqS8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
</section>
@show

@include('footer')
