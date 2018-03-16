<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
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
      $clientes = Cliente::orderBy('id', 'DESC') -> paginate(20);
      return view ('gerenciador.site.clientes.listaclientes' , ['clientes' => $clientes]);
   }

   public function gerenciadorClientesGravar(Request $request)
   {
      if ( $request -> hasFile('clientes_logo') ) {
         $path = Storage::putFile('imagens/img_clientes', $request->file('clientes_logo'));
         $string = $path;
         $pattern = '(imagens/img_clientes/)'; // <= retira essa expressão
         $replacement = ''; // <= substituindo por essa
         $hashlogo = preg_replace($pattern, $replacement, $string);
         $cliente = Cliente::insert(['clientes_site' => $request -> clientes_site, 'clientes_logo' => $hashlogo]);
      }else{
         $cliente = Cliente::insert($request->except('_token'));
      }
      \Session::flash('flashmsg', 'CLIENTE INSERIDO COM SUCESSO');
      return redirect()->route('clientes.lista');
   }

   public function gerenciadorClientesEditar($id)
   {
      $cliente = Cliente::findorfail($id);
      return view ('gerenciador.site.clientes.editarclientes' , ['cliente' => $cliente]);
   }

   public function gerenciadorClientesAtualizar(Request $request, $id)
   {
      $atualizar = Cliente::findorfail($id);

      if (!is_null( $atualizar -> clientes_logo )) {
         $excluilogo = Storage::delete('imagens/img_clientes/'.$atualizar -> clientes_logo);
      }

      if ( $request -> hasFile('clientes_logo') ) {
         $path = Storage::putFile('imagens/img_clientes', $request->file('clientes_logo'));
         $string = $path;
         $pattern = '(imagens/img_clientes/)'; // <= retira essa expressão
         $replacement = ''; // <= substituindo por essa
         $hashlogo = preg_replace($pattern, $replacement, $string);
         $atualizar -> update(['clientes_site' => $request -> clientes_site , 'clientes_logo' => $hashlogo ] );
      }else{
         $atualizar -> update(['clientes_site' => $request -> clientes_site]);
      }

      \Session::flash('flashmsg', 'CLIENTE ATUALIZADO COM SUCESSO');
      return redirect()->route('clientes.lista');

   }

   public function gerenciadorClientesExcluir($id)
   {
      $excluir = Cliente::find($id);
      $file = $excluir -> clientes_logo;
      $excluir -> delete();
      $files = Storage::delete('imagens/img_clientes/'.$file);
      return redirect()->route('clientes.lista');
   }

}
