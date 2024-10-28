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

class PartnerMail extends Mailable //We should implement ShouldQueue here on Production
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    
    public function envelope(): Envelope
    {
        if($this->data['branch'] == 'ict'){
            return new Envelope(
                // from: new Address('info@bmqbuilders.com', 'BMQ Builders'),
                to: ['info@bmqbuilders.com'],
                subject: 'ICT Partner Mail',
            );
        }
        return new Envelope(
            // from: new Address('info@bmqbuilders.com', 'BMQ Builders'),
            to: ['info@bmqbuilders.com'],
            subject: 'Construction Partner Mail',
        );
    }
    
    public function content(): Content
    {
        return new Content(
            view: 'template.client._partner',
        );
    }
    
    public function attachments(): array
    {
        if($this->data['attachment'] != null){
            return [
                Attachment::fromStorage('/uploads/'. $this->data['attachment'])
                ->as('attachment.pdf')
                ->withmime('application/pdf')
            ];
        }
        return [];
    }
}
