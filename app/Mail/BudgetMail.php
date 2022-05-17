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
        $file = $this->data['document'];
        $header = 'iewfewm';

        return $this->markdown('emails.budget', compact(['body', 'header']))
            ->subject('Solicitação de Orçamento')
            ->attach($file->getRealPath(), [
                'as' => $file->getClientOriginalName(),
                'mime' => $file->getMimeType()
            ]);
    }
}
