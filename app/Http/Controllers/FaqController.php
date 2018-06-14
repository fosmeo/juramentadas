<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function faqGravar(Request $request){

      $languser = \Session::get('languser');
      $gravar = Faq::Create(
         [
            'faq_pergunta' => $request -> faq_pergunta,
            'faq_resposta' => $request -> faq_resposta,
            'tab_lang' => $languser,
         ]);

      \Session::flash('flashmsg', 'FAQ gravada com sucesso');
      return redirect()->route('faq.editar', ['languser' => $languser]);
   }

   public function faqEditar($languser){
      $faqs = Faq::where('tab_lang', 'LIKE', $languser) ->  get();
      return view ('gerenciador.site.faq.editar', ['faqs' => $faqs]);
   }

   public function faqAtualizar(Request $request, $id, $languser){
      $atualizar = Faq::findorfail($id);
      $atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'Faq Atualizada com sucesso');
      return redirect()->route('faq.editar', ['languser' => $languser]);
   }

   public function faqExcluir($id){
      $languser = \Session::get('languser');
      $atualizar = Faq::findorfail($id) -> delete();
      \Session::flash('flashmsg', 'FAQ EXCLUÍDA COM SUCESSO');
      return redirect()->route('faq.editar', ['languser' => $languser]);
   }
}
