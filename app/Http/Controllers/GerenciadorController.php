<?php

namespace App\Http\Controllers;
use App\Locale_pt;
use App\Locale_en;
use App\Locale_es;
use App\Locale_it;
use App\Sobre;
use App\Idioma;
use App\Local;
use App\Footer;
use App\Header;
use App\Navbar;
use App\Slider;

use Illuminate\Http\Request;

class GerenciadorController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      return view('setidioma');
   }

   public function gerenciadorsetIdioma($languser)
   {
      \Session::put('languser',$languser);
      return view('dashboard');
   }
   public function gerenciadorInicial($languser)
   {
      if ($languser == 'pt'){
         $inicial = Locale_pt::get();
      }elseif ($languser == 'en') {
         $inicial = Locale_en::get();
      }elseif ($languser == 'es') {
         $inicial = Locale_es::get();
      }elseif ($languser == 'it') {
         $inicial = Locale_it::get();
      }
      return view ('gerenciador.site.inicial', ['inicials' => $inicial]);
   }

   public function gerenciadorSobre($languser)
   {
      $sobre = Sobre::where('tab_lang', 'like', $languser) -> orderby('texto_posicao') -> get();
      return view ('gerenciador.site.sobre', ['sobres' => $sobre]);
   }

   public function gerenciadorIdiomas($languser)
   {
      $idioma = Idioma::where('tab_lang', 'like', $languser) -> get();
      return view ('gerenciador.site.idiomas' , ['idiomas' => $idioma]);
   }

   public function gerenciadorCartas($languser)
   {
      return view ('gerenciador.site.cartas');
   }

   public function gerenciadorLocalizacao($languser)
   {
      $local = Local::where('tab_lang', 'like', $languser) -> get();
      $id = $local[0]['id']; // pega id do registro
      return view ('gerenciador.site.localizacao' , ['locales' => $local, 'id' => $id]);
   }

   public function gerenciadorNavbar($languser)
   {
      $navbars = Navbar::where('tab_lang', 'like', $languser) -> get();
      $id = $navbars[0]['id']; // pega id do registro
      return view ('gerenciador.site.navbar' , ['navbars' => $navbars, 'id' => $id]);
   }

   public function gerenciadorHeader($languser)
   {
      $headers = Header::where('tab_lang', 'like', $languser) -> get();
      $id = $headers[0]['id']; // pega id do registro
      return view ('gerenciador.site.header' , ['headers' => $headers, 'id' => $id]);
   }

   public function gerenciadorFooter($languser)
   {
      $footer = Footer::where('tab_lang', 'like', $languser) -> get();
      $id = $footer[0]['id']; // pega id do registro
      return view ('gerenciador.site.footer' , ['footers' => $footer, 'id' => $id]);
   }

}
