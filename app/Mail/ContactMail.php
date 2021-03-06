<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $scope;
    protected $data;

    /**
     * Create a new message instance.
     * @param $request
     * @param $data
     */
    public function __construct($request, $data)
    {
        $this->scope = $request;
        $this->data = $data;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build()
    {
        $body = $this->scope;
        $subject = $this->data['subject'];

        return $this->markdown('emails.contact', compact('body'))
            ->subject("Solicitação de contato: {$subject}");
    }
}
