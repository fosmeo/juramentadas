<?php

namespace App\Http\Controllers;
use App\Locale_pt;
use App\Locale_en;
use App\Locale_es;
use App\Locale_it;
use App\Sobre;
use App\Idiomas;
use App\Localizacao;
use App\Footer;
use App\Header;
use App\Navbar;
use App\Slider;
use App\Clientes;
use App\Depoimentos;
use App\Cidadania;

use Illuminate\Http\Request;

class SiteController extends Controller
{

   public function Index()
   {
      if( \Session::get('lang') !== null ){
         $lang = \Session::get('lang');
         $this->SitesetIdioma($lang);
      }else{
         $lang = 'pt';
         $this->SitesetIdioma($lang);
      }
      $itens_index = $this -> ConstroiLayoutIndex($lang);
      return view('welcome', $itens_index);
   }

   public function SiteSetIdioma($lang)
   {
      \Session::put('lang', $lang);
      return redirect('/');
   }

   public function ConstroiLayoutIndex($lang){
      $headerTop = $this -> TraduzHeaderTop($lang);
      $headerUpper = $this -> TraduzHeaderUpper($lang);
      $menu = $this -> TraduzMenu($lang);
      $sliders = $this -> TraduzSliders($lang);
      $servicos = $this -> TraduzServicos($lang);
      $sobres = $this -> TraduzSobre($lang);
      $depoimentos = $this -> TraduzDepoimentos($lang);
      $cidadanias = $this -> TraduzCidadania();
      $footers = $this -> TraduzFooter($lang);

      return [
         'headerTop' => $headerTop,
         'headerUpper' => $headerUpper,
         'menu' => $menu,
         'sliders' => $sliders,
         'servicos' => $servicos,
         'sobres' => $sobres,
         'depoimentos' => $depoimentos,
         'cidadanias' => $cidadanias,
         'footers' => $footers,
      ];

   }

   public function ConstroiLayoutPages($lang){
      $headerTop = $this -> TraduzHeaderTop($lang);
      $headerUpper = $this -> TraduzHeaderUpper($lang);
      $menu = $this -> TraduzMenu($lang);
      $sliders = $this -> TraduzSliders($lang);
      $footers = $this -> TraduzFooter($lang);

      return [
         'headerTop' => $headerTop,
         'headerUpper' => $headerUpper,
         'menu' => $menu,
         'sliders' => $sliders,
         'footers' => $footers,
      ];
   }

   //  PÁGINAS ------------------------------------------------------------------

   public function SiteServicos($lang, $textos_posicao){

      if ($lang == 'pt'){
         $servicos = Locale_pt::where(['textos_posicao' => $textos_posicao]) -> first();
      }elseif ($lang == 'en'){
         $servicos = Locale_en::where(['textos_posicao' => $textos_posicao]) -> first();
      }elseif ($lang == 'es') {
         $servicos = Locale_es::where(['textos_posicao' => $textos_posicao]) -> first();
      }elseif ($lang == 'it') {
         $servicos = Locale_it::where(['textos_posicao' => $textos_posicao]) -> first();
      }

      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.servicos', $itens_paginas, ['servicos' => $servicos]);

   }

   public function SiteIdiomas($lang){
      $idiomas = Idiomas::where(['tab_lang' => $lang]) -> first();
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.idiomas', $itens_paginas, ['idiomas' => $idiomas]);
   }

   public function SiteCidadania($lang){
      $cidadanias = Cidadania::get();
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.cidadania', $itens_paginas, ['cidadanias' => $cidadanias]);
   }

   public function SiteParceiros($lang)
   {
      $parceiros = Clientes::orderBy('id', 'ASC') -> paginate(50);
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.parceiros', $itens_paginas, ['parceiros' => $parceiros]);
   }


   public function SiteQuemSomos(){

      return view('paginas.quemsomos');
   }


   public function SiteCartas()
   {
      return view('paginas.cartas');
   }

   public function SiteLocalizacao(){

      return view('paginas.localizacao');
   }


   // TRADUZ MENUS E ITENS

   public function TraduzSliders($lang){
      $sliders = Slider::where('tab_lang', 'like', $lang) -> get();
      return $sliders;
   }

   public function TraduzMenu($lang){
      $navbars = Navbar::where('tab_lang', 'like', $lang) -> get();
      $nav =  $navbars[0]['navbar_itens'];
      $menu = $array = explode(';', $nav);
      return $menu;
   }

   public function TraduzHeaderTop($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> get();
      $headerTop =  $headers[0]['header_top'];
      return $headerTop;
   }

   public function TraduzHeaderUpper($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> get();
      $headerUpper = $array = explode(';', $headers[0]['header_upper']);
      return $headerUpper;
   }

   public function TraduzServicos($lang){

      if ($lang == 'pt'){
         $servicos = Locale_pt::orderby('textos_posicao') -> get();
      }elseif ($lang == 'en'){
         $servicos = Locale_en::orderby('textos_posicao') -> get();
      }elseif ($lang == 'es') {
         $servicos = Locale_es::orderby('textos_posicao') -> get();
      }elseif ($lang == 'it') {
         $servicos = Locale_it::orderby('textos_posicao') -> get();
      }
      return $servicos;
   }

   public function TraduzCidadania(){
      $cidadanias = Cidadania::get();
      return $cidadanias;
   }

   public function TraduzFooter($lang){
      $footers = Footer::where('tab_lang', 'like', $lang) -> get() -> toArray();
      return $footers;
   }

   public function TraduzDepoimentos($lang){
      $depoimentos = Depoimentos::where('tab_lang', 'like', $lang) -> get();
      return $depoimentos;
   }

   public function TraduzSobre($lang){
      $sobres = Sobre::where('tab_lang', 'like', $lang) -> get();
      return $sobres;
   }

}
