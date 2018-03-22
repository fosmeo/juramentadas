<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use App\Log;
use App\User;

class OtherController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function otherOrcamentos()
   {
      $orcamento = Orcamento::orderBy('orcamentos_id', 'desc') -> paginate(20);
      return view ('gerenciador.other.orcamentos', ['orcamentos' => $orcamento]);
   }

   public function otherLogs()
   {
      return view ('gerenciador.other.logs');
   }

   public function listaUsuarios()
   {
      $users = User::orderBy('name') -> paginate(20);
      $total = User::orderBy('name') -> get() -> count();
      return view('gerenciador.other.listausuarios', ['users' => $users, 'total' => $total]);
   }

   public function registrarUsuarios()
   {
      return view('auth.register');
   }

   public function excluirUsuarios($id)
   {
      if ($id == 1) {
         \Session::flash('flashmsg', 'IMPOSSíVEL EXCLUIR O ADMININISTRADOR');
         return redirect()->route('other.listausuarios');
      }else{

         $excluir = User::find($id);
         $excluir -> delete();

         \Session::flash('flashmsg', 'USUÁRIO EXCLUÍDO COM SUCESSO');
         return redirect()->route('other.listausuarios');
      }
   }

}
