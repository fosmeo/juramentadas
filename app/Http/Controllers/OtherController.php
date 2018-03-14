<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use App\Log;

class OtherController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function otherOrcamentos()
  {
     $orcamento = Orcamento::paginate(20);
     return view ('gerenciador.other.orcamentos', ['orcamentos' => $orcamento]);
  }

  public function otherLogs()
  {
     return view ('gerenciador.other.logs');
  }

}
