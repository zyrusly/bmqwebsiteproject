<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable //We should implement ShouldQueue here on Production
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function envelope(): Envelope
    {
        return new Envelope(
            // from: new Address('info@bmqbuilders.com', 'BMQ Builders'),
            to: $this->data['email'],
            subject: 'BMQ Builders Notification',
        );
    }
    
    public function content(): Content
    {
        return new Content(
            view: 'template.client._reply',
        );
    }
    
    public function attachments(): array
    {
        return [];
    }
}
