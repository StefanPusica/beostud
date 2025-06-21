<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
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
            subject: 'Nova poruka sa kontakt forme',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',  // ← ovo mora postojati
            with: ['data' => $this->data]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}