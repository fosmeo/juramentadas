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
use App\Depoimentos;

use Illuminate\Http\Request;

class SiteController extends Controller
{

   public function Index()
   {
      if( \Session::get('lang') !== null){
         $lang = \Session::get('lang');
         $this->SitesetIdioma($lang);
      }else{
         $lang = 'pt';
         $this->SitesetIdioma($lang);
      }

      $menu = $this -> TraduzMenu($lang);
      $headerTop = $this -> TraduzHeaderTop($lang);
      $headerUpper = $this -> TraduzHeaderUpper($lang);
      $footers = $this -> TraduzFooter($lang);
      $sliders = $this -> TraduzSliders($lang);
      $depoimentos = $this -> TraduzDepoimentos();

      // print_r($menu);
      // echo $headerTop;
      // echo $headerUpperMail;
      // echo $headerUpperTel;

      return view('welcome',
      [
      'menu' => $menu,
      'headerTop' => $headerTop,
      'headerUpper' => $headerUpper,
      'footer' => $footers,
      'sliders' => $sliders,
      'depoimentos' => $depoimentos,
      ]);
   }

   public function SitesetIdioma($lang)
   {
      \Session::put('lang', $lang);
      return redirect('/');
   }

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

   public function TraduzFooter(){
      // GAMBIARRA DE LANG
      $lang = \Session::get('lang');
      $footers = Footer::where('tab_lang', 'like', $lang) -> get();
      $footer = json_decode($footers);
      return $footer;
   }

   public function TraduzDepoimentos(){
      // GAMBIARRA DE LANG
      $lang = \Session::get('lang');
      $depoimentos = Depoimentos::where('tab_lang', 'like', $lang) -> get();
      return $depoimentos;
   }



    public function SiteSobre(){

      dd($this -> TraduzDepoimentos());

      // return view('paginas.sobre' );
   }

   public function SiteServicos(){

      return view('paginas.servicos' );
   }

   public function SiteIdiomas(){

      return view('paginas.idiomas' );
   }

   public function SiteQuemSomos(){

      return view('paginas.quemsomos' );
   }

   public function SiteParceiros(){

      return view('paginas.parceiros' );
   }

   public function SiteCartas(){

      return view('paginas.cartas' );
   }

   public function SiteLocalizacao(){

      return view('paginas.localizacao' );
   }
}
