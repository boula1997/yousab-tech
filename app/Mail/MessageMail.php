<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class MessageMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function envelope()
    {
        return new Envelope(
            from: new Address($this->message->email, $this->message->name),
            subject: settings()->website_title,
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail.message_mail',
        );
    }

    public function attachments()
    {
        // $file = $this->message->file()->first();
        // if ($file) {
        //     $path = $file->getRawOriginal('path');
        //     return [
        //         Attachment::fromStorage($path),
        //     ];
        // }
    }
}
