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

  public function gerenciadorDepoimentosEditar($id_depoimento)
  {
    $depoimentos = Depoimentos::where('id_depoimento', '=', $id_depoimento) -> get();
    $array_depoimentos = $depoimentos-> toArray();
    $caminho_imagem = $array_depoimentos[0]['depoimentos_imagem']; //pega o nome da imagem(pelo array) para enviar para a view
    return view ('gerenciador.site.depoimentos.editar' , ['depoimentos' => $depoimentos, 'caminho_imagem' => $caminho_imagem, 'id_depoimento' => $id_depoimento]);
  }

  public function gerenciadorDepoimentosLista()
  {

    $depoimentos = Depoimentos::select() -> groupBy('id_depoimento') -> get();
    return view ('gerenciador.site.depoimentos.lista' , ['depoimentos' => $depoimentos]);
  }

  public function gerenciadorDepoimentosAtualizar(Request $request, $id)
  {
    
  }

  public function gerenciadorDepoimentosAtualizar(Request $request, $id)
  {
    
    $atualizar = Depoimentos::findorfail($id);
    $hasfile = $request -> hasFile('depoimentos_imagem');

    if($hasfile){
      $arquivo_anterior = $atualizar -> depoimentos_imagem;
      Storage::delete('imagens/img_depoimentos/'.$arquivo_anterior);
      $arquivo_novo = $request->file('depoimentos_imagem') -> getClientOriginalName();

      Storage::putFileAs('imagens/img_depoimentos/', $request->file('depoimentos_imagem'), $arquivo_novo);
    }else{
      $arquivo_novo = $atualizar -> depoimentos_imagem;;
    }

    
    $atualizar -> update([
      'depoimentos_texto' => $request -> depoimentos_texto,
      'depoimentos_imagem' => $arquivo_novo
    ]);
    
    $depoimentos = Depoimentos::select() -> groupBy('id_depoimento') -> get();

    \Session::flash('flashmsg', 'DEPOIMENTOS ATUALIZADOS COM SUCESSO');
    return view('gerenciador.site.depoimentos.lista', ['depoimentos' => $depoimentos]);
  }


  public function gerenciadorDepoimentosGravar(Request $request)
  {
    $this -> validate($request,[
      'depoimentos_imagem' => ['required']
    ]);

    $id_ultimo = Depoimentos::select('id_depoimento') -> orderby('id_depoimento', 'DESC') -> first();
    $id_proximo = $id_ultimo -> id_depoimento + 1;
    $arquivo_novo = $request->file('depoimentos_imagem') -> getClientOriginalName();
    $gravar = Depoimentos::insert([
      [
        'id_depoimento' => $id_proximo,
        'id_lang' => 1,
        'depoimentos_texto' => $request -> depoimento_pt,
        'depoimentos_imagem' => $arquivo_novo,
        'tab_lang' => 'pt'
      ],
      [
        'id_depoimento' => $id_proximo,
        'id_lang' => 2,
        'depoimentos_texto' => $request -> depoimento_en,
        'depoimentos_imagem' => $arquivo_novo,
        'tab_lang' => 'en'
      ],
      [
        'id_depoimento' => $id_proximo,
        'id_lang' => 3,
        'depoimentos_texto' => $request -> depoimento_es,
        'depoimentos_imagem' => $arquivo_novo,
        'tab_lang' => 'es'
      ],
      [
        'id_depoimento' => $id_proximo,
        'id_lang' => 4,
        'depoimentos_texto' => $request -> depoimento_it,
        'depoimentos_imagem' => $arquivo_novo,
        'tab_lang' => 'it'
      ]
    ]);

    Storage::putFileAs('imagens/img_depoimentos/', $request -> file('depoimentos_imagem'), $arquivo_novo);
    \Session::flash('flashmsg', 'DEPOIMENTOS GRAVADOS COM SUCESSO');
    return redirect()->route('depoimentos.lista', ['lang' => \Session::get('languser')]);
  }

  public function gerenciadorDepoimentosExcluir($id){

    // $depoimento_excluir = Depoimentos::where('id_depoimento', '=', $id_depoimento) -> get();
    $depoimento_excluir = Depoimentos::findorfail($id);

    dd($depoimento_excluir);
    // $arquivo_existe = $depoimento_excluir -> depoimentos_imagem;
    // if($arquivo_existe){
      // Storage::delete('imagens/img_depoimentos/'.$arquivo_existe);
    // }
    // $depoimento_excluir -> delete();
    // \Session::flash('flashmsg', 'DEPOIMENTO EXCLUÍDO COM SUCESSO');
    // return redirect()->route('depoimentos.lista', ['lang' => \Session::get('languser')]);
  }
}