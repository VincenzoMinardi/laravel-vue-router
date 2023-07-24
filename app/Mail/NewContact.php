<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContact extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public function __construct($_email)
    {
        $this->email = $_email;
    }


    public function envelope()
    {
        return new Envelope(

            replyTo: $this->email->email,
            subject: 'Abbiamo ricevuto la tua richiesta '  . $this->email->name,


        );
    }


    public function content()
    {
        return new Content(
            view: 'api.email.mail',
        );
    }


    public function attachments()
    {
        return [];
    }
}
