<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviaEmailWhatsapp;

class MailController extends Controller
{

   public function whatsappEnviarMail(Request $request)
   {
      $whatsdados = $request;
      Mail::to('9cc91ca36b-360b12@inbox.mailtrap.io') -> send(new EnviaEmailWhatsapp($whatsdados));

      if (\Session::get('lang') == 'pt') {
            \Session::flash('flashmsg', "Obrigado! Seu contato foi enviado. Em breve entraremos em contato.");
      }elseif (\Session::get('lang') == 'en') {
            \Session::flash('flashmsg', 'Thanks! Your contact has been sent. Soon we will contact you.');
      }elseif (\Session::get('lang') == 'es') {
         \Session::flash('flashmsg', 'Gracias! Su contacto fue enviado. Pronto nos pondremos en contacto con usted.' );
      }elseif (\Session::get('lang') == 'it') {
         \Session::flash('flashmsg', 'Grazie! Il tuo contatto è stato inviato. Ti contatteremo a breve.');
      }
      return redirect()->route('site.notification', ['lang' => \Session::get('lang')]);
   }

   public function orcamentoEnviarMail(Request $request)
   {
      $whatsdados = $request;
      Mail::to('9cc91ca36b-360b12@inbox.mailtrap.io') -> send(new EnviaEmailWhatsapp($whatsdados));

      if (\Session::get('lang') == 'pt') {
            \Session::flash('flashmsg', "Obrigado! Seu contato foi enviado. Em breve entraremos em contato.");
      }elseif (\Session::get('lang') == 'en') {
            \Session::flash('flashmsg', 'Thanks! Your contact has been sent. Soon we will contact you.');
      }elseif (\Session::get('lang') == 'es') {
         \Session::flash('flashmsg', 'Gracias! Su contacto fue enviado. Pronto nos pondremos en contacto con usted.' );
      }elseif (\Session::get('lang') == 'it') {
         \Session::flash('flashmsg', 'Grazie! Il tuo contatto è stato inviato. Ti contatteremo a breve.');
      }
      return redirect()->route('site.notification', ['lang' => \Session::get('lang')]);
   }

}
