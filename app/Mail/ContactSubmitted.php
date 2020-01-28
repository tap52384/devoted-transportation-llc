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
