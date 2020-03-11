Your contact form was submitted successfully!

A confirmation email has been sent to {{ $contact->email }}.

To recap, here are the details:

Email: {{ $contact->email }}
Purpose of Trip: {{ $contact->trip_purpose }}
Point of Contact: {{ $contact->contact_first_name }}&nbsp;{{ $contact->contact_last_name }}
Point of Contact Phone: {{ $contact->contact_phone_fmt }}
Point of Contact Email: {{ $contact->email }}
Passenger: {{ $contact->passenger_first_name . ' ' . $contact->passenger_last_name }}
Passenger Phone: {{ $contact->passenger_phone_fmt }}
Total Number of Passengers: {{ $contact->num_passengers }}
Pickup Time: {{ $contact->pickup_date->format('l, F j, Y h:i A') }}
Pickup Address: {{ $contact->pickup_address_1 }}
@if($contact->pickup_address_2 !== null){{ $contact->pickup_address_2 }}@endif
{{ $contact->pickup_city . ', ' . $contact->pickupState()->first()->initial . ' ' .
$contact->pickup_zip }}
Destination Time: {{ $contact->return_date->format('l, F j, Y h:i A') }}
Destination Address: {{ $contact->return_address_1 }}
@if($contact->return_address_2 !== null){{ $contact->return_address_2 }}@endif
{{ $contact->return_city . ', ' . $contact->returnState()->first()->initial . ' ' .
$contact->return_zip }}

We will contact you soon in response to your request. Thanks for choosing
Devoted Transportation!
