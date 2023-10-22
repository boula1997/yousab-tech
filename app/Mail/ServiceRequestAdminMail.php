<?php

namespace App\Mail;

use App\Http\Requests\Dashboard\ServiceRequestRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class ServiceRequestAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function envelope()
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            subject: settings()->website_title,
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail.serviceRequest_admin_mail',
        );
    }

    public function attachments()
    {
        // $file = $this->serviceRequest->file()->first();
        // if ($file) {
        //     $path = $file->getRawOriginal('path');
        //     return [
        //         Attachment::fromStorage($path),
        //     ];
        // }
    }
}
