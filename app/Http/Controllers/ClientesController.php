<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function gerenciadorClientesLista()
   {
      $clientes = Cliente::get();
      return view ('gerenciador.site.clientes' , ['clientes' => $clientes]);
   }

   public function gerenciadorClientesInserir()
   {
      echo "inserir";
   }

   public function gerenciadorClientesAtualizar()
   {
      echo "Atualizar";
   }

   public function gerenciadorClientesExcluir()
   {
      echo "excluir";
   }
   
}
