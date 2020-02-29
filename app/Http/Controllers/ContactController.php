<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactSubmitted;
use Carbon\Carbon;
use Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::debug('About to validate the contact form!');

        $input = $request->all();

        // Custom error messages for the form validator
        // https://laravel.com/docs/6.x/validation#custom-error-messages
        $messages = [
            'pickup_date.date_format' => 'Pickup date must be given in format MM/DD/YYYY.',
            'pickup_time.date_format' => 'Pickup time must be given in the format HH:MM AM/PM.',
            'return_date.date_format' => 'Return date must be given in format MM/DD/YYYY.',
            'return_time.date_format' => 'Please specify a return time in the format HH:MM AM/PM.',
            'pickup_state' => 'Please select a state for your pickup address.',
            'return_state' => 'Please select a state for your destination address.'
        ];

        // Accepted validation rules
        // https://laravel.com/docs/6.x/validation#available-validation-rules
        $rules = [
            'contact_first_name' => 'required|max:50',
            'contact_last_name' => 'required|max:50',
            'contact_phone' => 'required|numeric',
            // https://laravel.com/docs/6.x/validation#rule-email
            'email' => 'required|email:rfc',
            'num_passengers' => 'required|numeric',
            'passenger_first_name' => 'required',
            'passenger_last_name' => 'required',
            'passenger_phone' => 'required|numeric',

            'pickup_address_1' => 'required',
            'pickup_city' => 'required',
            'pickup_date' => 'required|date_format:m/d/Y|after_or_equal:today',
            'pickup_state' => 'required|numeric',
            // https://www.php.net/manual/en/function.date.php
            'pickup_time' => 'required|date_format:g:i A',
            'pickup_zip' => 'required|numeric',

            'return_address_1' => 'required',
            'return_city' => 'required',
            'return_date' => 'required|date_format:m/d/Y|after_or_equal:pickup_date',
            'return_state' => 'required|numeric',
            'return_time' => 'required|date_format:g:i A',
            'return_zip' => 'required|numeric',

            'trip_purpose' => 'required|max:4000'
        ];

        Log::debug('Passed validation for contact form!');

        // https://laravel.com/docs/6.x/validation#quick-writing-the-validation-logic
        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        );

        if ($validator->fails()) {
            return redirect('/contact-us#form-errors')
                        ->withErrors($validator)
                        ->withInput();
        }

        Log::debug('Passed validation for contact form!');

        // cleans up the data for pushing to the DB
        $input = $request->all();
        $input['pickup_date'] .= ' ' . $input['pickup_time'];
        $input['return_date'] .= ' ' . $input['return_time'];
        unset($input['pickup_time']);
        unset($input['return_time']);

        $contact = new Contact();
        foreach ($input as $key => $value) {
            $contact->$key = $input[$key];
        }
        $contact->save();
        $mail = new ContactSubmitted($contact);
        Mail::to($request->input('email'))
        ->bcc(env('MAIL_USERNAME'))
        ->bcc(explode(',', env('MAIL_BCC_RECIPIENTS')))
        ->send($mail);

        return $this->show($contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view(
            'contactus',
            [
                'contact' => $contact
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
