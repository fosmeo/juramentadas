<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Locale_pt;
use App\Locale_en;
use App\Locale_es;
use App\Locale_it;
use App\Idiomas;
use App\Depoimento;
use App\Localizacao;
use App\Footer;
use App\Header;
use App\Navbar;
use App\Slider;

class AtualizaController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function atualizaInicial_pt(Request $request, $id){
      $atualizar = Locale_pt::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Português) gravada com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.inicial', ['languser' => $languser]);
   }

   public function atualizaInicial_en(Request $request, $id){
      $atualizar = Locale_en::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Inglês) gravada com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.inicial', ['languser' => $languser]);
   }

   public function atualizaInicial_es(Request $request, $id){
      $atualizar = Locale_es::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Espanhol) gravada com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.inicial', ['languser' => $languser]);
   }

   public function atualizaInicial_it(Request $request, $id){
      $atualizar = Locale_it::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Italiano) gravada com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.inicial', ['languser' => $languser]);
   }

   public function atualizaIdiomas(Request $request, $id){
      $atualizar = Idiomas::findorfail($id);
      $atualizar -> update($request -> all());
      $languser = \Session::get('languser');
      \Session::flash('flashmsg', 'IDIOMAS ('.$languser.') gravados com sucesso');
      return redirect()->route('gerenciador.idiomas', ['languser' => $languser]);
   }

   public function atualizaLocal(Request $request, $id)
   {
      $atualizar = Localizacao::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'LOCALIZAÇÃO gravada com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.localizacao', ['languser' => $languser]);
   }

   public function atualizaHeader(Request $request, $id)
   {
      $atualizar = Header::findorfail($id);
      $atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'Header gravado com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.header', ['languser' => $languser]);
   }
   public function atualizaNavbar(Request $request, $id)
   {
      $atualizar = Navbar::findorfail($id);
      $atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'MENU gravado com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.navbar', ['languser' => $languser]);
   }

   public function atualizaFooter(Request $request, $id)
   {
      $atualizar = Footer::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'FOOTER gravado com sucesso');
      $languser = \Session::get('languser');
      return redirect()->route('gerenciador.footer', ['languser' => $languser]);
   }
}
