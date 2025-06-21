<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Checkout extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $items;
    public $isAdmin;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $items, $isAdmin = false)
    {
        $this->data = $data;
        $this->items = $items;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->isAdmin ? 'Nova narudžbina - Admin' : 'Vaša narudžbina',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->isAdmin ? 'emails.admin-checkout' : 'emails.user-checkout',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $pdf = Pdf::loadView('emails.admin-checkout-pdf', [
            'data' => $this->data,
            'items' => $this->items,
        ]);

        return [
            Attachment::fromData(fn () => $pdf->output(), 'narudzbina.pdf')
                ->withMime('application/pdf')
        ];
    

        return [];
    }
}
