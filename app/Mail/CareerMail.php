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

class CareerMail extends Mailable //We should implement ShouldQueue here on Production
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
                to: ['info@bmqbuilders.com'],
                subject: 'ICT Career Mail',
            );
        }
        return new Envelope(
            to: ['info@bmqbuilders.com'],
            subject: 'Construction Career Mail',
        );
    }
    
    public function content(): Content
    {
        return new Content(
            view: 'template.client._career',
        );
    }
    
    public function attachments(): array
    {
        if($this->data['attachment'] != null){
            return [
                Attachment::fromStorage('/uploads/'. $this->data['attachment'])
                ->as('resume.pdf')
                ->withmime('application/pdf')
            ];
        }
        return [];
    }
}
