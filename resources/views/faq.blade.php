@extends('master')

@section('content')

@include(
    'subheader',
    [
        'subtext' => 'Frequently asked questions about Devoted Transportation',
        'subheaderBg' => 'chalk-question-mark.jpg',
        'subheaderText' => 'FAQ'
    ]
)

<section class="container">
    <h2 class="text-center mb-5">
        FAQ
    </h2>

    <ul>
        <li>
            <p class="lead font-weight-bold">What type of transportation services do you provide?</p>
            <p>We provide ambulatory and wheelchair transportation.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">Can the drivers wait for me?</p>
            <p>For round trip transportation, a default 1-hour wait time is
                included. Additional wait time afterwards has an hourly rate of
                $30/hour.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">How long in advance do we need to schedule?</p>
            <p>Contact us as early as possible and we will do our best to meet
            your needs. We try to accomodate last-minute appointments as our
        schedule permits. Same-day appointments have a rush fee of $25.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">How do I schedule a ride?</p>
            <p>Call us toll-free at <a href="tel:+1{{ $envPhoneNumber }}" title="{{ $envPhoneNumberFmt }}">
                {{ $envPhoneNumberFmt }}
            </a> or <a href="/contact-us" title="Contact Us">submit a transportation request</a>
            to get a quote.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">Do you charge any cancellation fees?</p>
            <p>If appointments are cancelled at least 24 hours prior to the scheduled pickup time,
                you will not be charged. Same day cancellations are subject to 50% of your quote.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">Do you provide wheelchairs?</p>
            <p>We charge an additional fee of $25/loaner wheelchair.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">Do you have oxygen tanks in your vehicles?</p>
            <p>No, we do not carry any oxygen in our vehicles.</p>
        </li>
        <li>
            <p class="lead font-weight-bold">Do you provide transportation for vacations?</p>
            <p>Devoted Transportation also offers small group travel along the
            North Carolina east coast. You are able to choose exactly where you
            want to go and what to do. Plan your itinerary and leave the travel
            to us. For bigger groups, we would need information 4 months or more
            to plan accordingly.</p>
            <p>To schedule your trip, please call us at at
                <a href="tel:+1{{ $envPhoneNumber }}" title="{{ $envPhoneNumberFmt }}">
                {{ $envPhoneNumberFmt }}
                </a>.
            </p>
        </li>
    </ul>
</section>

@endsection
