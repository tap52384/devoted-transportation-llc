@extends('master')

@section('content')

@include(
    'subheader',
    [
        'subtext' => 'Who We Are & Our Mission',
        'subheaderBg' => 'nemt-multiple-vehicles.jpg',
        'subheaderText' => 'About Us'
    ]
)

<div class="container my-5">
    <h1>Our Mission</h1>
    <p>
        MTM is a healthcare and transportation management company whose mission
        is to partner with clients in developing innovative solutions for
        accessing healthcare, increasing independence, and connecting community
        resources in the most cost-effective manner. To achieve this, we
        leverage our core competencies in managing customer service operations
        and building provider networks.
    </p>
</div>

<div class="bg-secondary text-white py-5">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <blockquote class="blue">
                <p>
                    MTM staff are always well informed, willing to listen and learn about local concerns, and tireless in seeking the most appropriate solution.
                    <br />
                    <cite class="font-weight-bold">
                        Happy Customer, Senior Citizen
                    </cite>
                </p>
            </blockquote>
        </div> <!-- /.col-md-6 -->
        <div class="col-md-6">
            <blockquote class="blue">
                <p>
                    MTM staff are always well informed, willing to listen and learn about local concerns, and tireless in seeking the most appropriate solution.
                    <br />
                    <cite class="font-weight-bold">
                        Happy Customer, Senior Citizen
                    </cite>
                </p>
            </blockquote>
        </div> <!-- /.col-md-6 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
</div>

<div class="container my-5">
    <h1>Our Drivers</h1>
    <p>
    We believe that properly trained and certified employees gives us the
    knowledge and confidence to respond to a life-threatening situation and
    reduce the risk of driving accidents.</p>
    <p>We have partnered with the Department of General Services and American
    Red Cross to ensure all of our vehicle operators are trained in the areas of
    Defensive Driving, First Aid,
    <a href="https://www.redcross.org/take-a-class/aed/aed-training/aed-certification" title="CPR/AED Certification">CPR and AED</a>.
    </p>
</div>


@endsection
