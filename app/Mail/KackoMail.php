<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class KackoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $text;

    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $this->text = $request;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Новый заказ для Каско',
        );
    }

    /**
     * Get the message content definition.
     */
      public function content(): Content
      {
            return new Content(
                view: 'mail.kackomail',
                with: [
                    'amountLiability' => $this->text['amountLiability'],
                    'insurancePremium' => $this->text['insurancePremium'],
                    'brand_name' => $this->text['brand_name'],
                    'model_name' => $this->text['model_name'],
                    'equipment' => $this->text['equipment'],
                    'kasko_year' => $this->text['kasko_year'],
                    'customer' => $this->text['customer'],
                    'phone' => $this->text['phone'],
                ],
            );
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


