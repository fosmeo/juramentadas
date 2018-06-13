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
      if( \Session::get('lang') == null ){
         $lang = 'pt';
         $this->SitesetIdioma($lang);
      }

      \Session::put('area', 'index');
      $lang = \Session::get('lang');
      $itens_index = $this -> ConstroiLayoutIndex($lang);
      return view('welcome', $itens_index);
   }

   public function SiteSetIdioma($lang)
   {
      \Session::put('lang', $lang);
      return redirect('/');
   }

   public function ConstroiLayoutIndex($lang){
      $headers = $this -> TraduzHeader($lang);
      // $headerTop = $this -> TraduzHeaderTop($lang);
      // $headerUpper = $this -> TraduzHeaderUpper($lang);
      $menu = $this -> TraduzMenu($lang);
      $sliders = $this -> TraduzSliders($lang);
      $servicos = $this -> TraduzServicos($lang);
      $sobres = $this -> TraduzSobre($lang);
      $depoimentos = $this -> TraduzDepoimentos($lang);
      $cidadanias = $this -> TraduzCidadania();
      $footers = $this -> TraduzFooter($lang);

      return [
         'headers' => $headers,
         // 'headerTop' => $headerTop,
         // 'headerUpper' => $headerUpper,
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
      $headers = $this -> TraduzHeader($lang);
      // $headerTop = $this -> TraduzHeaderTop($lang);
      // $headerUpper = $this -> TraduzHeaderUpper($lang);
      $menu = $this -> TraduzMenu($lang);
      $sliders = $this -> TraduzSliders($lang);
      $footers = $this -> TraduzFooter($lang);

      return [
         'headers' => $headers,
         // 'headerTop' => $headerTop,
         // 'headerUpper' => $headerUpper,
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

      \Session::put('area', 'servicos');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.servicos', $itens_paginas, ['servicos' => $servicos]);

   }

   public function SiteIdiomas($lang)
   {
      $idiomas = Idiomas::where(['tab_lang' => $lang]) -> first();

      \Session::put('area', 'idiomas');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.idiomas', $itens_paginas, ['idiomas' => $idiomas]);
   }

   public function SiteCidadania($lang)
   {
      $cidadanias = Cidadania::get();

      \Session::put('area', 'cidadania');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.cidadania', $itens_paginas, ['cidadanias' => $cidadanias]);
   }

   public function SiteParceiros($lang)
   {
      $parceiros = Clientes::orderBy('id', 'ASC') -> paginate(50);

      \Session::put('area', 'parceiros');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.parceiros', $itens_paginas, ['parceiros' => $parceiros]);
   }

   public function SiteCartas($lang)
   {
      \Session::put('area', 'cartas');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.cartas', $itens_paginas);
   }

   public function SiteLocalizacao($lang){
      $locals = Footer::where('tab_lang', 'LIKE', $lang) -> get();

      \Session::put('area', 'local');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.localizacao', $itens_paginas, ['locals' => $locals]);
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

   public function TraduzHeader($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> first();
      // $headerTop =  $headers[0]['header_top'];
      return $headers;
   }

   // public function TraduzHeaderUpper($lang){
   //    $headers = Header::where('tab_lang', 'like', $lang) -> get();
   //    $headerUpper = $array = explode(';', $headers[0]['header_upper']);
   //    return $headerUpper;
   // }

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

   public function TraduzGlobais($lang)
   {
         $global =
         [
            'escolha_idioma' => 'Escolha o Idioma',
            'ligue_agora' => 'Ligue Agora',
            'solicite_orcamento' => 'Solicite um Orçamento',

            'painel_texto1' => 'Atendimento 24h - WhatsApp',
            'painel_texto1' => 'Apostilamento de Documentos em 24h',
            'painel_texto1' => 'Cidadania Italiana - Descontos Especiais em traduções para cidadania Italiana',
            'painel_botao1' => 'Saiba mais',
            'painel_botao2' => 'Clique Aqui',
         ];

         $global =
         [
            'escolha_idioma' => 'Choose the Language',
            'ligue_agora' => 'Call Now',
            'solicite_orcamento' => 'Get a Quote',

            'painel_texto1' => '24h Service - WhatsApp',
            'painel_texto1' => 'Apostilamento de Documentos em 24h (traduzir para ingles)',
            'painel_texto1' => 'Italian Citzenship - Special Discounts for Translations',
            'painel_botao1' => 'Read More',
            'painel_botao2' => 'Click Here',

         ];
         $global =
         [
            'escolha_idioma' => 'Elegir el Idioma',
            'ligue_agora' => 'Llame Ahora',
            'solicite_orcamento' => 'Solicitar Pressupuesto',

            'painel_texto1' => 'Servicio 24h - WhatsApp',
            'painel_texto1' => 'Apostilamento de Documentos em 24h (traduzir para espanhol)',
            'painel_texto1' => 'Cidadania Italiana - Descuentos Especiales Para La Traducción',
            'painel_botao1' => 'Lea Más',
            'painel_botao2' => 'Haga Clic Aquí',
         ];

         $global =
         [
            'escolha_idioma' => 'Scegliere la lingua',
            'ligue_agora' => 'Chiama Ora',
            'solicite_orcamento' => 'Richiedete Ora un Preventivo ',

            'painel_texto1' => 'Servizio 24 Ore - WhatsApp',
            'painel_texto1' => 'Apostilamento de Documentos em 24h (traduzir para ITALIANO)',
            'painel_texto1' => 'Cittadinanza Italiana - Sconti Speciali Per le Traduzioni',
            'painel_botao1' => 'Leggi di Più',
            'painel_botao2' => 'Clicca Qui',
         ];

   }

}
