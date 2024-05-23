<?php

namespace App\Mail;

// use Faker\Provider\ar_EG\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;    
    public $attachment;


    public function __construct($data, $attachment = null)
    {
        $this->data=$data;
        $this->attachment = $attachment;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         from : new Address('mustakim9419@gmail.com'),
    //         subject: $this->data['subject'],
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         // view: 'view.name',
    //         markdown: 'email.mail',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [
    //         Attachment::fromStorage($this->data['path'])
    //     ];
    // }

    public function build()
    {
        return $this->from('mustakim9419@gmail.com')
            ->subject($this->data['subject'])
            ->markdown('email.mail')
            ->when($this->attachment, function ($message) {
                $message->attach($this->attachment);
            });
    }
}
