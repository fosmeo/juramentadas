<?php

namespace App\Http\Controllers;
use App\Locale_pt;

use Illuminate\Http\Request;

class GerenciadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('setidioma');
    }

    public function gerenciadorsetIdioma($idioma)
    {
        session()->put('idioma',$idioma);
        return view('dashboard');
    }
    public function gerenciadorInicial($idioma){
        return view ('gerenciador.site.inicial');
    }
    public function gerenciadorSobre(){
        return view ('gerenciador.site.sobre');
    }
    public function gerenciadorIdiomas(){
        return view ('gerenciador.site.idiomas');
    }
    public function gerenciadorClientes(){
        return view ('gerenciador.site.clientes');
    }
    public function gerenciadorDepoimentos(){
        return view ('gerenciador.site.depoimentos');
    }
    public function gerenciadorCartas(){
        return view ('gerenciador.site.cartas');
    }
    public function gerenciadorLocalizacao(){
        return view ('gerenciador.site.localizacao');
    }
    public function gerenciadorHeader(){
        return view ('gerenciador.site.header');
    }
    public function gerenciadorFooter(){
        return view ('gerenciador.site.footer');
    }
    public function gerenciadorOrcamentos(){
        return view ('gerenciador.other.orcamentos');
    }
    public function gerenciadorLogs(){
        return view ('gerenciador.other.logs');
    }
}
