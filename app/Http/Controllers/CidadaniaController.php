<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadaniaController extends Controller
{
    public function cidadaniaApostilamento(){
        return view ('gerenciador.cidadania.cid_apostilamento');
    }
    public function cidadaniaCasamento(){
        return view ('gerenciador.cidadania.cid_casamento');
    }
    public function cidadaniaComecar(){
        return view ('gerenciador.cidadania.cid_comecar');
    }
    public function cidadaniaDireito(){
        return view ('gerenciador.cidadania.cid_direito');
    }
    public function cidadaniaDuvidas(){
        return view ('gerenciador.cidadania.cid_duvidas');
    }
    public function cidadaniaEleicao(){
        return view ('gerenciador.cidadania.cid_eleicao');
    }
    public function cidadaniaHaia(){
        return view ('gerenciador.cidadania.cid_haia');
    }
    public function cidadaniaItaBra(){
        return view ('gerenciador.cidadania.cid_itabra');
    }
    public function cidadaniaNatural(){
        return view ('gerenciador.cidadania.cid_natural');
    }
    public function cidadaniaSangue(){
        return view ('gerenciador.cidadania.cid_sangue');
    }
    public function cidadaniaTrentina(){
        return view ('gerenciador.cidadania.cid_trentina');
    }
}
