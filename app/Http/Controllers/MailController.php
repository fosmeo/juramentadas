<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviaEmailWhatsapp;
use App\Mail\EnviaEmailOrcamento;
use App\Orcamentos;

class MailController extends Controller
{

   public function whatsappEnviarMail(Request $request)
   {
      // isca de bots
      if(!is_null($request -> stobait)){
         die();
      }

      $whatsdados = $request;

      try{

         Mail::to('9cc91ca36b-360b12@inbox.mailtrap.io') -> send(new EnviaEmailWhatsapp($whatsdados));

         if (\Session::get('lang') == 'pt'){
               \Session::flash('flashmsg', "Obrigado! Seu contato foi enviado. Em breve entraremos em contato.");
         }elseif (\Session::get('lang') == 'en') {
               \Session::flash('flashmsg', 'Thanks! Your contact has been sent. Soon we will contact you.');
         }elseif (\Session::get('lang') == 'es') {
            \Session::flash('flashmsg', 'Gracias! Su contacto fue enviado. Pronto nos pondremos en contacto con usted.');
         }elseif (\Session::get('lang') == 'it') {
            \Session::flash('flashmsg', 'Grazie! Il tuo contatto è stato inviato. Ti contatteremo a breve.');
         }
      }catch(\Exception $e){

         if (\Session::get('lang') == 'pt') {
               \Session::flash('flashmsg', "Ocorreu um erro no envio da mensagem, por favor repita a operação.");
         }elseif (\Session::get('lang') == 'en') {
               \Session::flash('flashmsg', 'An error has occurred, please send message again.');
         }elseif (\Session::get('lang') == 'es') {
            \Session::flash('flashmsg', 'Ocurrio un error, por favor envíate la message de nuevo.' );
         }elseif (\Session::get('lang') == 'it') {
            \Session::flash('flashmsg', 'Si è verificato un errore, si prega di inviare di nuovo il messaggio.');
         }
      }
      return redirect()->route('site.notification', ['lang' => \Session::get('lang')]);
   }

   public function orcamentoEnviarMail(Request $request)
   {
      // isca de bots
      if(!is_null($request -> stobait)){
         die();
      }

      $orcamentodados = $request;

      try{

         Mail::to('9cc91ca36b-360b12@inbox.mailtrap.io') -> send(new EnviaEmailOrcamento($orcamentodados));

         if (\Session::get('lang') == 'pt') {
               \Session::flash('flashmsg', "Obrigado! Sua mensagem foi enviada. Em breve entraremos em contato.");
         }elseif (\Session::get('lang') == 'en') {
               \Session::flash('flashmsg', 'Thanks! Your message has been sent. Soon we will contact you.');
         }elseif (\Session::get('lang') == 'es') {
            \Session::flash('flashmsg', 'Gracias! Su mensaje fue enviada. Pronto nos pondremos en contacto con usted.' );
         }elseif (\Session::get('lang') == 'it') {
            \Session::flash('flashmsg', 'Grazie! Il tuo contatto è stato inviato. Ti contatteremo a breve.');
         }

         if($request -> hasfile('arquivo_orcamento')){
            $orcamento_arquivo = $request->file('arquivo_orcamento') -> getClientOriginalName();
            Storage::putFileAs('orcamentos/', $request -> file('arquivo_orcamento'), $orcamento_arquivo);
         }else{
            $orcamento_arquivo = null;
         }

         $inserir_orcamento = Orcamentos::insert(
         [
            'orcamentos_pfpj' => $request->radiopfpj,
            'orcamentos_nome' => $request->nome,
            'orcamentos_cidade' => $request->cidade,
            'orcamentos_est' => $request->estado,
            'orcamentos_tel' => $request->telefone,
            'orcamentos_email'=> $request->email,
            'orcamentos_obs'=> $request->mensagem,
            'orcamentos_file'=> $orcamento_arquivo,
            'ip_cliente' => $_SERVER["REMOTE_ADDR"],
         ]);

      }catch(\Exception $e){

         if (\Session::get('lang') == 'pt') {
               \Session::flash('flashmsg', "Ocorreu um erro no envio da mensagem, por favor repita a operação.");
         }elseif (\Session::get('lang') == 'en') {
               \Session::flash('flashmsg', 'An error has occurred, please send message again.');
         }elseif (\Session::get('lang') == 'es') {
            \Session::flash('flashmsg', 'Ocurrio un error, por favor envíate la message de nuevo.' );
         }elseif (\Session::get('lang') == 'it') {
            \Session::flash('flashmsg', 'Si è verificato un errore, si prega di inviare di nuovo il messaggio.');
         }
      }
      return redirect()->route('site.notification', ['lang' => \Session::get('lang')]);
   }

}
