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
      'col1-pt' => 'required',
      'depoimentos_logo' => 'required',
     ]);

     $maxTextoPosicao = Depoimento::orderBy('textos_posicao', 'desc') -> first();
     $maxTextoPosicao -> textos_posicao;
     dd($request);
   //   $depoimentos = Depoimento::insert(['tab_lang' => , 'textos_posicao' => , 'col1' => , 'depoimentos_logo' => , ]);
 }
}
