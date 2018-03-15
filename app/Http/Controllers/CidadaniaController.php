<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidadania;

class CidadaniaController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function cidadaniaExibir($id){
      $cidadanias = Cidadania::where('id', '=', $id) ->  get();
      return view ('gerenciador.cidadania.cid_formulario', ['cidadanias' => $cidadanias]);
   }

   public function cidadaniaAtualizar(Request $request, $id){
      $atualizar = Cidadania::findorfail($id);
    	$atualizar -> update($request -> all());
      \Session::flash('flashmsg', 'CIDADANIA gravada com sucesso');
      return redirect()->route('cidadania.exibir', ['id' => $id]);
   }
}
