<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviaEmailWhatsapp extends Mailable
{
    use Queueable, SerializesModels;

    public $whatsdados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($whatsdados)
    {
      $this -> whatsdados = $whatsdados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this -> from('whatsapp@fosmeo.com') -> view('mail.mailWhatsapp');
    }
}
