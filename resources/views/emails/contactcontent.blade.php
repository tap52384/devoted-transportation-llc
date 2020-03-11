<div class="alert alert-success text-center">
        <h3>Your contact form was submitted successfully!</h3>
        @isset($contact->email)
        <p class="lead">A confirmation email has been sent to
        <strong>{{ $contact->email }}</strong>.</p>
        @endisset
</div>

<p class="text-center lead text-muted">To recap, here are the details:</p>
<table class="table">
    <tbody>
        <tr class="pb-3">
            <th scope="row">Purpose of Trip</th>
            <td>
                {{ $contact->trip_purpose }}
            </td>
        </tr>
        <tr>
            <th scope="row">Point of Contact</th>
            <td>
            {{ $contact->contact_first_name }}&nbsp;{{ $contact->contact_last_name }}<br />
            <a href="tel+1{{ $contact->contact_phone }}" title="{{ $contact->contact_phone_fmt }}">{{ $contact->contact_phone_fmt }}</a><br />
            <a href="mailto:{{ $contact->email }}" title="{{ $contact->email }}">{{ $contact->email }}</a>
            </td>
        </tr>
        <tr>
            <th scope="row">Passenger</th>
            <td>
                {{ $contact->passenger_first_name . ' ' . $contact->passenger_last_name }}<br />
                <a href="tel+1{{ $contact->passenger_phone }}" title="{{ $contact->passenger_phone_fmt }}">{{ $contact->passenger_phone_fmt }}</a><br />
            </td>
        </tr>
        <tr>
            <th scope="row">Total Number of Passengers</th>
            <td>
                {{ $contact->num_passengers }}
            </td>
        </tr>
        <tr>
            <th scope="row">Pickup Time</th>
            <td>
                {{-- https://stackoverflow.com/a/34224409/1620794 --}}
                {{ $contact->pickup_date->format('l, F j, Y h:i A') }}
            </td>
        </tr>
        <tr>
            <th scope="row">Pickup Address</th>
            <td>
                {{ $contact->pickup_address_1 }}<br />
                @if($contact->pickup_address_2 !== null){{ $contact->pickup_address_2 }}<br />@endif
                {{ $contact->pickup_city . ', ' . $contact->pickupState()->first()->initial . ' ' .
                $contact->pickup_zip }}
            </td>
        </tr>
        <tr>
            <th scope="row">Destination Time</th>
            <td>
                {{-- https://stackoverflow.com/a/34224409/1620794 --}}
                {{ $contact->return_date->format('l, F j, Y h:i A') }}
            </td>
        </tr>
        <tr>
            <th scope="row">Destination Address</th>
            <td>
                {{ $contact->return_address_1 }}<br />
                @if($contact->return_address_2 !== null){{ $contact->return_address_2 }}<br />@endif
                {{ $contact->return_city . ', ' . $contact->returnState()->first()->initial . ' ' .
                $contact->return_zip }}
            </td>
        </tr>
    </tbody>
</table>

<p class="text-center lead text-muted">We will contact you soon in response to your request.
Thanks for choosing Devoted Transportation!</p>
