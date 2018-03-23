<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Depoimento;

class DepoimentosController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function gerenciadorDepoimentosExibir($lang)
   {
      $depoimento = Depoimento::where('tab_lang', 'like', $lang) -> orderby('textos_posicao') -> get();
      return view ('gerenciador.site.depoimentos.depoimentos' , ['depoimentos' => $depoimento]);

   }

   public function gerenciadorDepoimentosAtualizar(Request $request, $id, $pos){

     $atualizar = Depoimento::findorfail($id);

     if ( $request -> hasFile('depoimentos_logo') ) {

        if (!is_null( $atualizar -> depoimentos_logo )) {
           $excluilogo = Storage::delete('imagens/img_depoimentos/'.$atualizar -> depoimentos_logo);
        }

        $path = Storage::putFile('imagens/img_depoimentos', $request->file('depoimentos_logo'));
        $string = $path;
        $pattern = '(imagens/img_depoimentos/)'; // <= retira essa expressão
        $replacement = ''; // <= substituindo por essa
        $hashlogo = preg_replace($pattern, $replacement, $string);
        $atualizar -> update(['col1' => $request -> col1]);
        $atualizar_logo = Depoimento::where('textos_posicao', '=', $pos);
        $atualizar_logo -> update(['depoimentos_logo' => $hashlogo]);
     }else{
        $atualizar -> update(['col1' => $request -> col1]);
     }

     $lang = \Session::get('lang');
     \Session::flash('flashmsg', 'DEPOIMENTOS ('.$lang.') gravados com sucesso');
     return redirect()->route('depoimentos.exibir', ['lang' => $lang]);

  }

  public function gerenciadorDepoimentosGravar(Request $request){

     $this -> validate($request,[
      'col1_pt' => 'required',
      'depoimentos_logo' => 'required',
     ]);

     $path = Storage::putFile('imagens/img_depoimentos', $request->file('depoimentos_logo'));
     $string = $path;
     $pattern = '(imagens/img_depoimentos/)'; // <= retira essa expressão
     $replacement = ''; // <= substituindo por essa
     $hashlogo = preg_replace($pattern, $replacement, $string);

     $maxPosicao = Depoimento::orderBy('textos_posicao', 'desc') -> first();

     if(is_null($maxPosicao)){
        $pos = 1;
     }else{
        $pos = $maxPosicao -> textos_posicao + 1;
     }

     $atualizar_logo = Depoimento::insert(['col1' => $request -> col1_pt , 'tab_lang' => 'pt', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);

        if (!is_null($request -> col1_en)) {
           $atualizar_logo = Depoimento::insert(['col1' => $request -> col1_en, 'tab_lang' => 'en', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);
        }else{
           $atualizar_logo = Depoimento::insert(['col1' => '', 'tab_lang' => 'en', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);
        }

        if (!is_null($request -> col1_es)) {
           $atualizar_logo = Depoimento::insert(['col1' => $request -> col1_es, 'tab_lang' => 'es', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);
        }else{
           $atualizar_logo = Depoimento::insert(['col1' => '', 'tab_lang' => 'es', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);
        }

        if (!is_null($request -> col1_it)) {
           $atualizar_logo = Depoimento::insert(['col1' => $request -> col1_it, 'tab_lang' => 'it', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);
        }else{
           $atualizar_logo = Depoimento::insert(['col1' => '', 'tab_lang' => 'it', 'textos_posicao' => $pos, 'depoimentos_logo' => $hashlogo]);
        }

     \Session::flash('flashmsg', 'DEPOIMENTOS gravados com sucesso');
     return redirect()->route('depoimentos.exibir', ['lang' => \Session::get('lang')]);
  }

  public function gerenciadorDepoimentosExcluir($pos){
     $fileexcluir = Depoimento::where('textos_posicao', '=', $pos) -> first();
     $depoimentoexcluir = Depoimento::where('textos_posicao', '=', $pos);
     $file = $fileexcluir -> depoimentos_logo;
     $excluilogo = Storage::delete('imagens/img_depoimentos/'.$file);
     $depoimentoexcluir -> delete();

     \Session::flash('flashmsg', 'DEPOIMENTO EXCLUÍDO COM SUCESSO');
     return redirect()->route('depoimentos.exibir', ['lang' => \Session::get('lang')]);
 }
}
