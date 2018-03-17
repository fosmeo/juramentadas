<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locale_pt;
use App\Locale_en;
use App\Locale_es;
use App\Locale_it;
use App\Sobre;
use App\Idioma;
use App\Depoimento;
use App\Local;
use App\Footer;
use App\Header;

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
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.inicial', ['lang' => $lang]);
   }

   public function atualizaInicial_en(Request $request, $id){
      $atualizar = Locale_en::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Inglês) gravada com sucesso');
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.inicial', ['lang' => $lang]);
   }

   public function atualizaInicial_es(Request $request, $id){
      $atualizar = Locale_es::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Espanhol) gravada com sucesso');
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.inicial', ['lang' => $lang]);
   }

   public function atualizaInicial_it(Request $request, $id){
      $atualizar = Locale_it::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'PAGINA INICIAL (Italiano) gravada com sucesso');
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.inicial', ['lang' => $lang]);
   }

   public function atualizaSobre(Request $request, $id){
      $atualizar = Sobre::findorfail($id);
    	$atualizar -> update($request -> all());
      $lang = \Session::get('lang');
      \Session::flash('flashmsg', 'TEXTO SOBRE A EMPRESA ('.$lang.') gravado com sucesso');
      return redirect()->route('gerenciador.sobre', ['lang' => $lang]);
   }

   public function atualizaIdiomas(Request $request, $id){
      $atualizar = Idioma::findorfail($id);
      $atualizar -> update($request -> all());
      $lang = \Session::get('lang');
      \Session::flash('flashmsg', 'IDIOMAS ('.$lang.') gravados com sucesso');
      return redirect()->route('gerenciador.idiomas', ['lang' => $lang]);
   }

   public function atualizaLocal(Request $request, $id)
   {
      $atualizar = Local::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'LOCALIZAÇÃO gravada com sucesso');
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.localizacao', ['lang' => $lang]);
   }

   public function atualizaHeader(Request $request, $id)
   {
      $atualizar = Header::findorfail($id);
      $atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'Header gravado com sucesso');
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.header', ['lang' => $lang]);
   }

   public function atualizaFooter(Request $request, $id)
   {
      $atualizar = Footer::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'FOOTER gravado com sucesso');
      $lang = \Session::get('lang');
      return redirect()->route('gerenciador.footer', ['lang' => $lang]);
   }
}
