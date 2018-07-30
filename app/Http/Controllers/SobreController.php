<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Sobre;


class SobreController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function gerenciadorSobreEditar($languser)
   {
     $sobre = Sobre::where('tab_lang', 'like', $languser) -> orderby('id_sobre') -> get();
     return view ('gerenciador.site.sobre.editar', ['sobres' => $sobre]);
   }

   public function gerenciadorSobreAtualizar(Request $request, $id, $languser){

      $sobre = Sobre::findorfail($id);
      $id_sobre = $sobre -> id_sobre;

      if ($request -> hasFile('sobre_imagem')) {
         $exclui_imagem = $sobre -> sobre_imagem;

         if(!is_null($exclui_imagem)){
            Storage::delete('imagens/img_sobre/'.$exclui_imagem);
         }
         $arquivo_novo = $request -> file('sobre_imagem') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_sobre/', $request -> file('sobre_imagem'), $arquivo_novo);

         Sobre::where(['id' => $id]) -> update(
            [
               'sobre_titulo' => $request -> sobre_titulo,
               'sobre_texto' => $request -> sobre_texto,
            ]);
         Sobre::where(['id_sobre' => $id_sobre]) -> update(
            [
            'sobre_imagem' => $arquivo_novo,
         ]);

      }else{
         Sobre::where(['id' => $id]) -> update(
            [
               'sobre_titulo' => $request -> sobre_titulo,
               'sobre_texto' => $request -> sobre_texto,
            ]);
      }

      \Session::flash('flashmsg', 'SEÇÃO ATUALIZADA COM SUCESSO');
      return $this -> gerenciadorSobreEditar($sobre -> tab_lang);
   }

   public function gerenciadorSobreGravar(Request $request)
   {
      $languser = \Session::get('languser');

      if($request -> hasfile('sobre_imagem')){
         $arquivo_novo = $request->file('sobre_imagem') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_sobre/', $request -> file('sobre_imagem'), $arquivo_novo);
      }else{
         $arquivo_novo = null;
      }

      $id_ultimo = Sobre::select('id_sobre') -> orderby('id_sobre', 'DESC') -> first();

      if(is_null($id_ultimo)){
         $id_proximo = 1;
      }else{
         $id_proximo = $id_ultimo -> id_sobre + 1;
      }

      Sobre::insert(['id_sobre' => $id_proximo, 'sobre_imagem' => $arquivo_novo, 'tab_lang' => 'pt']);
      Sobre::insert(['id_sobre' => $id_proximo, 'sobre_imagem' => $arquivo_novo, 'tab_lang' => 'en']);
      Sobre::insert(['id_sobre' => $id_proximo, 'sobre_imagem' => $arquivo_novo, 'tab_lang' => 'es']);
      Sobre::insert(['id_sobre' => $id_proximo, 'sobre_imagem' => $arquivo_novo, 'tab_lang' => 'it']);

      $gravar = Sobre::where(['tab_lang' => $languser, 'id_sobre' => $id_proximo]) -> update(
         [
            'sobre_titulo' => $request -> sobre_titulo,
            'sobre_texto' => $request -> sobre_texto,
         ]);

         \Session::flash('flashmsg', 'SEÇÃO GRAVADA COM SUCESSO');
         return $this -> gerenciadorSobreEditar(\Session::get('languser'));
   }

   public function gerenciadorSobreExcluir($id_sobre){

      $sobre_imagem = Sobre::select('sobre_imagem') -> where('id_sobre', '=', $id_sobre) -> first();
      $exclui_imagem = $sobre_imagem -> sobre_imagem;
      if (!is_null($exclui_imagem)){
         Storage::delete('imagens/img_sobre/'.$exclui_imagem);
      }
      $sobre_excluir = Sobre::where('id_sobre', '=', $id_sobre) -> delete();

      \Session::flash('flashmsg', 'SEÇÃO EXCLUÍDA COM SUCESSO');
      return $this -> gerenciadorSobreEditar(\Session::get('languser'));
   }


}
