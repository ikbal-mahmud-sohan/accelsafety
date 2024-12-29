<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AccidentInvestigationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $url; // Declare the property to hold the URL

    /**
     * Create a new message instance.
     *
     * @param array $data Data to pass to the mailable (e.g., URL)
     */
    public function __construct($data)
    {
        $this->url = $data['url']; // Store the URL in the property
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Accident Investigation Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.accident_investigation' // Specify your markdown view
        );
    }

    /**
     * Get the view data for the message.
     */
    public function build()
    {
        return $this->with([
            'url' => $this->url // Pass the URL to the view
        ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}



