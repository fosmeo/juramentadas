<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orcamento;
use App\Log;

class OtherController extends Controller
{
   public function otherOrcamentos()
  {
     $orcamento = Orcamento::paginate(50);
     return view ('gerenciador.other.orcamentos', ['orcamentos' => $orcamento]);
  }

  public function otherLogs()
  {
     return view ('gerenciador.other.logs');
  }

}
