<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SiteContactForm extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $phone;
    public $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $body)
    {
        $this->name     = $name;
        $this->email    = $email;
        $this->phone    = $phone;
        $this->body     = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this
            ->from('info@silvereagleshipping.com', 'Site Contact Form')
            ->replyTo($request -> email)
            ->subject("Website Contact Form: " . $this->name)
            ->view('emails.contactForm');
    }
}
