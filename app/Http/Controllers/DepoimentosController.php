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
    $array_imagem = $depoimentos-> toArray();
    $caminho_imagem = $array_imagem[0]['depoimentos_imagem']; //pega o nome da imagem(pelo array) para enviar para a view
    return view ('gerenciador.site.depoimentos.editar' , ['depoimentos' => $depoimentos, 'caminho_imagem' => $caminho_imagem, 'id_depoimento' => $id_depoimento]);
  }

  public function gerenciadorDepoimentosLista()
  {

    $depoimentos = Depoimentos::select() -> groupBy('id_depoimento') -> get();
    return view ('gerenciador.site.depoimentos.lista' , ['depoimentos' => $depoimentos]);
  }

  public function gerenciadorDepoimentosAtualizarLogo(Request $request, $id_depoimento)
  {
    
    $this -> validate($request,[
      'depoimentos_imagem' => ['required']
    ]);

    // GRAVA O ARQUIVO NOVO NO DISCO
      $arquivo_novo = $request->file('depoimentos_imagem') -> getClientOriginalName();
      Storage::putFileAs('imagens/img_depoimentos/', $request -> file('depoimentos_imagem'), $arquivo_novo);
    //

    // Exclui o arquivo antigo do DB e do disco
      $depoimento_logo = Depoimentos::select('depoimentos_imagem') -> where('id_depoimento', '=', $id_depoimento) -> first();
      $exclui_logo = $depoimento_logo -> depoimentos_imagem;
      Storage::delete('imagens/img_depoimentos/'.$exclui_logo);
    // 

    
    $atualizar_logo = Depoimentos::where('id_depoimento', '=', $id_depoimento) -> update(['depoimentos_imagem' => $arquivo_novo]);

    \Session::flash('flashmsg', 'LOGO ATUALIZADO COM SUCESSO');
    $depoimentos = Depoimentos::select() -> groupBy('id_depoimento') -> get();
    return view('gerenciador.site.depoimentos.lista', ['depoimentos' => $depoimentos]);

  }

  public function gerenciadorDepoimentosAtualizar(Request $request, $id_depoimento)
  {
    // RECEBE ARRAY INPUT DO REQUEST 0 ='pt' | 1 = 'en' | 2 = 'es' | 3 = 'it'
      Depoimentos::where('tab_lang', 'LIKE', 'pt', 'AND', 'id_depoimento', '=', $id_depoimento) -> update(['depoimentos_texto' => $request -> depoimentos_texto[0]]);  
      Depoimentos::where('tab_lang', 'LIKE', 'en', 'AND', 'id_depoimento', '=', $id_depoimento) -> update(['depoimentos_texto' => $request -> depoimentos_texto[1]]);
      Depoimentos::where('tab_lang', 'LIKE', 'es', 'AND', 'id_depoimento', '=', $id_depoimento) -> update(['depoimentos_texto' => $request -> depoimentos_texto[2]]);
      Depoimentos::where('tab_lang', 'LIKE', 'it', 'AND', 'id_depoimento', '=', $id_depoimento) -> update(['depoimentos_texto' => $request -> depoimentos_texto[3]]);

    \Session::flash('flashmsg', 'DEPOIMENTOS ATUALIZADOS COM SUCESSO');
    $depoimentos = Depoimentos::select() -> groupBy('id_depoimento') -> get();
    return view('gerenciador.site.depoimentos.lista', ['depoimentos' => $depoimentos]);
  }


  public function gerenciadorDepoimentosGravar(Request $request)
  {
    $this -> validate($request,[
      'depoimentos_imagem' => ['required']
    ]);

    $id_ultimo = Depoimentos::select('id_depoimento') -> orderby('id_depoimento', 'DESC') -> first();

    if(is_null($id_ultimo)){
      $id_proximo = 1;
    }else{
      $id_proximo = $id_ultimo -> id_depoimento + 1;  
    }
    
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

  public function gerenciadorDepoimentosExcluir($id_depoimento){

    $depoimento_logo = Depoimentos::select('depoimentos_imagem') -> where('id_depoimento', '=', $id_depoimento) -> first();
    $exclui_logo = $depoimento_logo -> depoimentos_imagem;
    Storage::delete('imagens/img_depoimentos/'.$exclui_logo);
    $depoimento_excluir = Depoimentos::where('id_depoimento', '=', $id_depoimento) -> delete();
    \Session::flash('flashmsg', 'DEPOIMENTOS EXCLUÍDOS COM SUCESSO');
    return redirect()->route('depoimentos.lista', ['lang' => \Session::get('languser')]);
  }
}