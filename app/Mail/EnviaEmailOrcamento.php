<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviaEmailOrcamento extends Mailable
{
    use Queueable, SerializesModels;

    public $orcamentodados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orcamentodados)
    {
      $this -> orcamentodados = $orcamentodados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('orcamento@fosmeo.com') -> view('mail.mailOrcamento');
    }
}
