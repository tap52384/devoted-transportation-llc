<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contact;

class ContactSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    // public property will be available in the view used to create the email
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
        $this->contact->contact_phone_fmt =
        preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $this->contact->contact_phone);
        $this->contact->passenger_phone_fmt =
        preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $this->contact->passenger_phone);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Contact Form Submitted';
        if (strcasecmp(env('APP_ENV'), 'production') !== 0) {
            $subject = '[test] ' . $subject;
        }
        return $this->view('emails.contactsubmitted')
                    ->text('emails.contactsubmitted_plain')
                    ->subject($subject);
    }
}
