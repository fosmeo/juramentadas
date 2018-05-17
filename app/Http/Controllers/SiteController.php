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
use App\Depoimento;

use Illuminate\Http\Request;

class SiteController extends Controller
{

   public function Index()
   {
      $lang = \Session::get('lang');
      $menu = $this -> TraduzMenu($lang);
      $headerTop = $this -> TraduzHeaderTop($lang);
      $headerUpperMail = $this -> TraduzHeaderUpperMail($lang);
      $headerUpperTel = $this -> TraduzHeaderUpperTel($lang);
      $footers = $this -> TraduzFooter();
      $depoimentos = $this -> TraduzDepoimentos();

      // print_r($menu);
      // echo $headerTop;
      // echo $headerUpperMail;
      // echo $headerUpperTel;

      return view('welcome',
      ['menu' => $menu,
      'headerTop' => $headerTop,
      'headerUpperMail' => $headerUpperMail,
      'headerUpperTel' => $headerUpperTel,
      'footer' => $footers,
      'depoimentos' => $depoimentos,
      ]);
   }

   public function TraduzMenu($lang){
      $navbars = Navbar::where('tab_lang', 'like', $lang) -> get();
      $nav =  $navbars[0]['itens'];
      $menu = $array = explode(';', $nav);
      return $menu;
   }

   public function TraduzHeaderTop($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> get();
      $headerTop =  $headers[0]['header_top'];
      return $headerTop;
   }

   public function TraduzHeaderUpperMail($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> get();
      $headerUpperMail =  $headers[0]['upper_email'];
      return $headerUpperMail;
   }

   public function TraduzHeaderUpperTel($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> get();
      $headerUpperTel =  $headers[0]['upper_tel'];
      return $headerUpperTel;
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
      $depoimentos = Depoimento::where('tab_lang', 'like', $lang) -> get();
      return $depoimentos;
   }

   public function SitesetIdioma($lang)
   {
      \Session::put('lang', $lang);
      return redirect('/');
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
