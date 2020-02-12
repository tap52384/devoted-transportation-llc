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
        // Custom error messages for the form validator
        // https://laravel.com/docs/6.x/validation#custom-error-messages
        $messages = [
            'pickup_date.required' => 'Pickup date must be given in format MM/DD/YYYY.',
            'return_date.required' => 'Return date must be given in format MM/DD/YYYY.',
        ];

        // Accepted validation rules
        // https://laravel.com/docs/6.x/validation#available-validation-rules
        $rules = [
            'contact_first_name' => 'required',
            'email' => 'email:rfc',
            'pickup_date' => 'required|date_format:m/d/Y',
            'pickup_time' => 'required|date_format:h:i A',
            'return_date' => 'required|date_format:m/d/Y',
            'return_time' => 'required|date_format:h:i A',
            'first_name' => 'required',
            'last_name' => 'required',
            // https://laravel.com/docs/6.x/validation#rule-email
            'email' => 'required|email:rfc',
            'phone' => 'required|numeric',
            'vehicle_year' => 'required|numeric',
            'vehicle_make' => 'required',
            'vehicle_model' => 'required',
            'message' => 'required'
        ];

        // https://laravel.com/docs/6.x/validation#quick-writing-the-validation-logic
        $validator = Validator::make(
            $request->all(),
            $rules,
            $messages
        );

        if ($validator->fails()) {
            return redirect('/contact-us')
                        ->withErrors($validator)
                        ->withInput();
        }

        Log::debug('Passed validation for contact form!');

        $contact = new Contact();
        foreach ($rules as $key => $value) {
            $contact->$key = $request->input($key);
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
