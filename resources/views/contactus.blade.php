@extends('master')

@section('content')

@include(
    'subheader',
    [
        'subheaderBg' => 'contact-us.jpg',
        'subheaderText' => 'Contact Us'
    ]
)

{{-- if no contact form has been successfully submitted, then show it --}}
@empty($contact)
<div class="contact-info-list container">
    <div class="separator-style-2 mb-3"></div>
    <p class="lead">We would love to hear from you</p>
    {{-- <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-globe" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="font-weight-bold">Address Details</span><br />
            <span>123 Anywhere Street</span><br />
            <span>Somewhere, NC 27809</span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row --> --}}
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="font-weight-bold">Email Address</span><br />
            <span>
                <a href="mailto:{{ env('MAIL_USERNAME') }}" title="{{ env('MAIL_USERNAME') }}">
                    {{ env('MAIL_USERNAME') }}
                </a>
            </span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-mobile" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="font-weight-bold">Telephone Number</span><br />
            <span>
                <a href="tel:+1{{ $envPhoneNumber }}">
                    {{ $envPhoneNumberFmt }}
                </a>
            </span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
    <div class="row mb-4">
        <div class="col-1 my-auto">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
        </div> <!-- /.col-1 -->
        <div class="col-11">
            <span class="font-weight-bold">Hours of Operation</span><br />
            <span>
                <span>Monday – Friday: 09:00AM – 10:00PM</span><br />
                <span>Sunday &amp; Saturday: 10:30AM – 11:00PM</span>
            </span>
        </div> <!-- /.col-11 -->
    </div> <!-- /.row -->
</div>

<div class="contact-us-pre-form-picture">
</div>

<div class="overlapping-form-section mt-n5">
    <div class="container bg-white pt-5 px-5">
            <div class="separator-style-2 mb-3"></div>
            <p class="lead">We are devoted to meeting your needs</p>
            <p>Give us a call or drop by anytime, we endeavour to answer all
                    enquiries within 24 hours on business days.</p>
                <p>Email: <a href="mailto:{{ env('MAIL_USERNAME') }}">
                    {{ env('MAIL_USERNAME') }}
                </a></p>
                <p>Phone: <a href="tel:+1{{ $envPhoneNumber }}">
                    {{ $envPhoneNumberFmt }}
                </a>
                </p>
                <div class="bg-light-gray px-3 py-3">
                    <a href="#" id="form-errors" title="form-errors" class="mt-3"></a>
                    <h3 class="text-center mb-5">
                        Transportation Request Form
                    </h3>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <h3>The following errors were encountered:</h3>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- the contact form! -->
                    <form method="POST" id="transportation-request-form">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="contact_first_name">Point of Contact First Name</label>
                                <input type="text" class="form-control" id="contact_first_name" name="contact_first_name"
                                aria-describedby="contact_first_name_help" autocomplete="given-name" required
                                value="{{ old('contact_first_name') }}" />
                                <small id="contact_first_name_help" class="form-text">Please enter the name of the person completing this form</small>
                            </div> <!-- /.col -->
                            <div class="form-group col-md-6">
                                <label for="contact_last_name">Point of Contact Last Name</label>
                                <input type="text" class="form-control" id="contact_last_name" name="contact_last_name"
                                aria-describedby="contact_last_name_help" autocomplete="family-name" required
                                value="{{ old('contact_last_name') }}" />
                                <small id="contact_last_name_help" class="form-text">Last name of the person completing this form</small>
                            </div> <!-- /.col -->
                        </div> <!-- /.form-row -->
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="passenger_first_name">Passenger First Name</label>
                                <input type="text" class="form-control" id="passenger_first_name" name="passenger_first_name"
                                aria-describedby="passenger_first_name_help" autocomplete="given-name" required
                                value="{{ old('passenger_first_name') }}" />
                                <small id="passenger_first_name_help" class="form-text">First name of the passenger</small>
                            </div> <!-- /.col -->
                            <div class="form-group col-md-6">
                                <label for="passenger_last_name" class="col-form-label">Passenger Last Name</label>
                                <input type="text" class="form-control" id="passenger_last_name" name="passenger_last_name"
                                aria-describedby="passenger_last_name_help" autocomplete="family-name" required
                                value="{{ old('passenger_last_name') }}" />
                                <small id="passenger_last_name_help" class="form-text">Last name of the passenger</small>
                            </div> <!-- /.col -->
                        </div> <!-- /.form-row -->
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="contact_phone" class="col-form-label">Point of Contact Phone</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="contact_phone_addon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                      </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="(___) ___-____"
                                    aria-label="contact_phone" aria-describedby="contact_phone_addon"
                                    maxlength="14" id="contact_phone" name="contact_phone"
                                    value="{{ old('contact_phone') }}" required />
                                  </div> <!-- /.input-group mb-3 -->
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passenger_phone" class="col-form-label">Passenger Phone</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="passenger_phone_addon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                      </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="(___) ___-____"
                                    aria-label="passenger_phone" aria-describedby="passenger_phone_addon"
                                    maxlength="14" id="passenger_phone" name="passenger_phone"
                                    value="{{ old('passenger_phone') }}" />
                                  </div> <!-- /.input-group mb-3 -->
                            </div> <!-- /.col -->
                        </div> <!-- /.form-row mb-3 -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="email" class="col-form-label">Email</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email_addon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control"
                                    aria-label="email" aria-describedby="email_addon"
                                    maxlength="255" id="email" name="email" value="{{ old('email') }}"
                                    required />
                                </div> <!-- /.input-group mb-3 -->
                            </div> <!-- /.col -->
                        </div> <!-- /.form-row mb-3 -->
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label for="num_passengers">Number of Passengers</label>
                                <input type="number" class="form-control" id="num_passengers" name="num_passengers"
                                aria-describedby="num_passengers_help" min="1" value="{{ old('num_passengers', 1) }}" required />
                                <small id="num_passengers_help" class="form-text">Total number of passengers, including the one specified above.</small>
                            </div> <!-- /.col -->
                            <div class="form-group col-md-6">
                                <label for="trip_purpose">Purpose of Trip</label>
                                <input type="text" class="form-control" id="trip_purpose" name="trip_purpose"
                                value="{{ old('trip_purpose') }}" required />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-row mb-3 -->
                        <div class="form-row mb-3">
                            @foreach (
                                [
                                    'pickup_' => 'Pickup',
                                    'return_' => 'Return'
                                ] as $rideType => $value)
                            <div class="form-group col-md-6">
                                <label for="{{ $rideType }}date" class="col-form-label">{{ $value }} Date</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="{{ $rideType }}date_addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                                    aria-label="{{ $rideType }}date" aria-describedby="{{ $rideType }}date_addon"
                                    maxlength="255" id="{{ $rideType }}date" name="{{ $rideType }}date" required
                                    value="{{ old($rideType . 'date') }}" />
                                </div> <!-- /.input-group mb-3 -->
                                <label for="{{ $rideType }}time" class="col-form-label">{{ $value }} Time</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="{{ $rideType }}time_addon">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="12:00 PM"
                                    aria-label="{{ $rideType }}time" aria-describedby="{{ $rideType }}time_addon"
                                    maxlength="255" id="{{ $rideType }}time" name="{{ $rideType }}time" required
                                    value="{{ old($rideType . 'time') }}" />
                                </div> <!-- /.input-group mb-3 -->
                                <label for="{{ $rideType }}address_1">{{ strcasecmp($rideType, 'pickup_') === 0 ? $value : 'Destination' }} Address</label>
                                <input type="text" class="form-control" id="{{ $rideType }}address_1" placeholder="Address 1"
                                autocomplete="street-address" name="{{ $rideType }}address_1"
                                value="{{ old($rideType . 'address_1') }}" required />
                                <input type="text" class="form-control" id="{{ $rideType }}address_2"
                                name="{{ $rideType }}address_2" placeholder="Address 2"
                                autocomplete="address-line2" value="{{ old($rideType . 'address_2') }}" />
                                <input type="text" class="form-control" id="{{ $rideType }}city"
                                name="{{ $rideType }}city" autocomplete="address-level2" placeholder="City"
                                value="{{ old($rideType . 'city') }}" required />
                                <select id="{{ $rideType }}state" name="{{ $rideType }}state"
                                class="form-control" autocomplete="address-level1" required>
                                <option value="">Choose...</option>
                                    @foreach(App\State::all() as $state)
                                        {{-- Defaults to NC for now --}}
                                        <option value="{{ $state->id }}"
                                        @if(strcasecmp(old($rideType . 'state'), $state->id) === 0 ||
                                        strcasecmp($state->initial, 'NC') === 0) selected @endif>{{ $state->name }}</option>
                                    @endforeach
                                </select>
                                <input type="text" class="form-control" id="{{ $rideType }}zip" name="{{ $rideType }}zip" placeholder="Zip"
                                value="{{ old($rideType . 'zip') }}" autocomplete="postal-code" required />
                            </div> <!-- /.form-group .col-md-6 -->
                            @endforeach
                        </div> <!-- /.form-row mb-3 -->
                        <button type="submit" class="btn btn-block btn-dark" id="contact_submit" name="contact_submit">
                            Send Transportation Request
                        </button>
                    </form>
                </div> <!-- /.bg-light-gray -->
    </div>
</div>
@else
<div class="container mt-3 mb-5">
    @include('emails.contactcontent')
</div>
@endempty


@endsection
