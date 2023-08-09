<?php

namespace App\Mail;

use App\Models\ContactSeller;
use App\Models\Seller;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUserAnnonce extends Mailable
{
    use Queueable, SerializesModels;

    public $seller  ; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactSeller $seller)
    {
        $this->seller = $seller ; 
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: "NOUVEAU MESSAGE DE {{$this->seller->name}}",
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.contactseller',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
