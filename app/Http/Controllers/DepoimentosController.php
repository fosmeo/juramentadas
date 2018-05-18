<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Depoimentos;

class DepoimentosController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function gerenciadorDepoimentosExibir()
   {
      $depoimento = Depoimentos::select() -> orderby('id') -> get();
      return view ('gerenciador.site.depoimentos.depoimentos' , ['depoimentos' => $depoimento]);
   }

   public function gerenciadorDepoimentosAtualizar(Request $request, $id)
   {
      $this -> validate($request,[
         'depoimentos_logo' => ['required']
      ]);
      
      $atualizar = Depoimentos::findorfail($id);
      $hasfile = $request -> hasFile('depoimentos_logo');

      if($hasfile){
         $arquivo_anterior = $atualizar -> depoimentos_logo;
         Storage::delete('imagens/img_depoimentos/'.$arquivo_anterior);
         $arquivo_novo = $request->file('depoimentos_logo') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_depoimentos/', $request->file('depoimentos_logo'), $arquivo_novo);
      }else{
         $arquivo_novo = null;
      }
         $atualizar -> update(['depoimento_pt' => $request -> depoimento_pt, 'depoimento_en' => $request -> depoimento_en, 'depoimento_es' => $request -> depoimento_es, 'depoimento_it' => $request -> depoimento_it, 'depoimentos_logo' => $arquivo_novo]);

      \Session::flash('flashmsg', 'DEPOIMENTOS ATUALIZADOS COM SUCESSO');
      return redirect()->route('depoimentos.exibir', ['lang' => \Session::get('lang')]);
   }

   public function gerenciadorDepoimentosGravar(Request $request)
   {
      $hasfile = $request -> hasFile('depoimentos_logo');

      if($hasfile){
         $arquivo_novo = $request->file('depoimentos_logo') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_depoimentos/', $request -> file('depoimentos_logo'), $arquivo_novo);
         $gravar = Depoimentos::insert(['depoimento_pt' => $request -> depoimento_pt, 'depoimento_en' => $request -> depoimento_en, 'depoimento_es' => $request -> depoimento_es, 'depoimento_it' => $request -> depoimento_it, 'depoimentos_logo' => $arquivo_novo]);
      }else{
         $gravar = Depoimentos::insert(['depoimento_pt' => $request -> depoimento_pt, 'depoimento_en' => $request -> depoimento_en, 'depoimento_es' => $request -> depoimento_es, 'depoimento_it' => $request -> depoimento_it]);
      }

      \Session::flash('flashmsg', 'DEPOIMENTOS GRAVADOS COM SUCESSO');
      return redirect()->route('depoimentos.exibir', ['lang' => \Session::get('lang')]);
   }

   public function gerenciadorDepoimentosExcluir($id){

      $depoimento_excluir = Depoimentos::findorfail($id);
      $arquivo_existe = $depoimento_excluir -> depoimentos_logo;
      if($arquivo_existe){
         Storage::delete('imagens/img_depoimentos/'.$arquivo_existe);
      }
      $depoimento_excluir -> delete();
      \Session::flash('flashmsg', 'DEPOIMENTO EXCLUÍDO COM SUCESSO');
      return redirect()->route('depoimentos.exibir', ['lang' => \Session::get('lang')]);
   }
}
