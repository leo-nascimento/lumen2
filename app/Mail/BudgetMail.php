<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BudgetMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $scope;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $data)
    {
        $this->scope = $request;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $body = $this->scope;
        return $this->markdown('emails.budget', compact('body'))
                    ->subject('Solicitação de Orçamento')
                    ->attach($this->data['document']);
    }
}
