<?php

namespace App\Http\Controllers;
use App\Locale_pt;
use App\Locale_en;
use App\Locale_es;
use App\Locale_it;
use App\Sobre;
use App\Idioma;
use App\Depoimento;
use App\Local;
use App\Footer;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      return view('setidioma');
   }

   public function gerenciadorsetIdioma($lang)
   {
      \Session::put('lang',$lang);
      return view('dashboard');
   }
   public function gerenciadorInicial($lang)
   {
      if ($lang == 'pt'){
         $inicial = Locale_pt::get();
      }elseif ($lang == 'en') {
         $inicial = Locale_en::get();
      }elseif ($lang == 'es') {
         $inicial = Locale_es::get();
      }elseif ($lang == 'it') {
         $inicial = Locale_it::get();
      }
      return view ('gerenciador.site.inicial', ['inicials' => $inicial]);
   }

   public function gerenciadorSobre($lang)
   {
      $sobre = Sobre::where('tab_lang', 'like', $lang) -> orderby('texto_posicao') -> get();
      return view ('gerenciador.site.sobre', ['sobres' => $sobre]);
   }

   public function gerenciadorIdiomas($lang)
   {
      $idioma = Idioma::where('tab_lang', 'like', $lang) -> get();
      return view ('gerenciador.site.idiomas' , ['idiomas' => $idioma]);
   }

   public function gerenciadorClientes($lang)
   {
      return view ('gerenciador.site.clientes');
   }

   public function gerenciadorDepoimentos($lang)
   {
      $depoimento = Depoimento::where('tab_lang', 'like', $lang) -> orderby('textos_posicao') -> get();
      return view ('gerenciador.site.depoimentos' , ['depoimentos' => $depoimento]);
   }

   public function gerenciadorCartas($lang)
   {
      return view ('gerenciador.site.cartas');
   }

   public function gerenciadorLocalizacao($lang)
   {
      $local = Local::where('tab_lang', 'like', $lang) -> get();
      $id = $local[0]['id']; // pega id do registro
      return view ('gerenciador.site.localizacao' , ['locales' => $local, 'id' => $id]);
   }

   public function gerenciadorHeader($lang)
   {
      return view ('gerenciador.site.header');
   }

   public function gerenciadorFooter($lang)
   {
      $footer = Footer::where('tab_lang', 'like', $lang) -> get();
      $id = $footer[0]['id']; // pega id do registro
      return view ('gerenciador.site.footer' , ['footers' => $footer, 'id' => $id]);
   }

}
