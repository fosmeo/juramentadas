<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
 public function __construct()
 {
  $this->middleware('auth');
}

public function gerenciadorClientesLista()
{
  $clientes = Clientes::orderBy('id', 'DESC') -> paginate(20);
  return view ('gerenciador.site.clientes.lista' , ['clientes' => $clientes]);
}

public function gerenciadorClientesGravar(Request $request)
{

  $this -> validate($request,[
    'clientes_logo' => ['required']
  ]);

  $arquivo_novo = $request->file('clientes_logo') -> getClientOriginalName();
  $gravar = Clientes::insert(
    [
      'clientes_logo' => $arquivo_novo,
      'clientes_site' => $request -> clientes_site
    ]);

  Storage::putFileAs('imagens/img_clientes/', $request -> file('clientes_logo'), $arquivo_novo);
  \Session::flash('flashmsg', 'CLIENTE GRAVADO COM SUCESSO');
  return redirect()->route('clientes.lista', ['lang' => \Session::get('languser')]);
}

public function gerenciadorClientesAtualizar(Request $request, $id)
{

  $atualizar = Clientes::findorfail($id);

  if ($request -> hasFile('clientes_logo')) {

    $arquivo_anterior = $atualizar -> clientes_logo;
    Storage::delete('imagens/img_clientes/'.$arquivo_anterior);
    $arquivo_novo = $request->file('clientes_logo') -> getClientOriginalName();
    Storage::putFileAs('imagens/img_clientes/', $request->file('clientes_logo'), $arquivo_novo);

    $atualizar -> update(
    [
      'clientes_logo' => $arquivo_novo,
      'clientes_site' => $request -> clientes_site
    ]);

  }else{
    $atualizar -> update(
    [
      'clientes_site' => $request -> clientes_site
    ]);
  }

  \Session::flash('flashmsg', 'CLIENTE GRAVADO COM SUCESSO');
  return redirect()->route('clientes.lista', ['lang' => \Session::get('languser')]);

}

public function gerenciadorClientesEditar($id)
{
  $cliente = Clientes::findorfail($id);
  return view ('gerenciador.site.clientes.editar' , ['cliente' => $cliente]);
}

public function gerenciadorClientesExcluir($id)
{
  $excluir = Clientes::find($id);
  $file = $excluir -> clientes_logo;
  $excluir -> delete();
  $files = Storage::delete('imagens/img_clientes/'.$file);

  \Session::flash('flashmsg', 'CLIENTE EXCLUÍDO COM SUCESSO');
  return redirect()->route('clientes.lista');
}

}
