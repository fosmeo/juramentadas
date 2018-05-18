<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Slider;

class SlidersController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function gerenciadorSlidersExibir($languser)
   {

      $slider = Slider::where('tab_lang', 'like', $languser) -> get();
      
      if($slider -> isEmpty()){
        \Session::flash('flashmsg', 'NÃO HÁ SLIDERS NO IDIOMA "'. $languser .'" A SEREM EXIBIDOS');
        $id='';
        return view ('gerenciador.site.sliders.sliders' , ['sliders' => $slider, 'id' => $id]);
      }else{
        $id = $slider[0]['id']; // pega id do registro
        return view ('gerenciador.site.sliders.sliders' , ['sliders' => $slider, 'id' => $id]);
      }      
   }

   public function gerenciadorSlidersAtualizar(Request $request, $id)
   {
      $this -> validate($request,[
         'slider_imagem' => ['required']
      ]);

      $atualizar = Slider::findorfail($id);
      $hasfile = $request -> hasFile('slider_imagem');

      if($hasfile){
         $arquivo_anterior = $atualizar -> slider_imagem;
         Storage::delete('imagens/img_sliders/'.$arquivo_anterior);
         $arquivo_novo = $request->file('slider_imagem') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_sliders/', $request->file('slider_imagem'), $arquivo_novo);
      }else{
         $arquivo_novo = null;
      }

      $atualizar -> update(['slider_titulo' => $request -> slider_titulo, 'slider_texto' => $request -> slider_texto, 'slider_botao' => $request -> slider_botao, 'slider_imagem' => $arquivo_novo]);

      \Session::flash('flashmsg', 'SLIDERS ATUALIZADOS COM SUCESSO');
      return redirect()->route('sliders.exibir', ['lang' => \Session::get('lang')]);
   }

   public function gerenciadorSlidersGravar(Request $request)
   {
    $this -> validate($request,[
        'slider_imagem' => ['required']
     ]);

      $hasfile = $request -> hasFile('slider_imagem');

      if($hasfile){
         $arquivo_novo = $request->file('slider_imagem') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_sliders/', $request -> file('slider_imagem'), $arquivo_novo);
         $gravar = Slider::insert(['slider_imagem' => $arquivo_novo]);
      }else{
         $gravar = Slider::insert(['slider_pt' => $request -> slider_pt, 'slider_en' => $request -> slider_en, 'slider_es' => $request -> slider_es, 'slider_it' => $request -> slider_it]);
      }

      \Session::flash('flashmsg', 'SLIDERS GRAVADOS COM SUCESSO');
      return redirect()->route('sliders.exibir', ['lang' => \Session::get('lang')]);
   }

   public function gerenciadorSlidersExcluir($id){

      $slider_excluir = Slider::findorfail($id);
      $arquivo_existe = $slider_excluir -> slider_imagem;
      if($arquivo_existe){
         Storage::delete('imagens/img_sliders/'.$arquivo_existe);
      }
      $slider_excluir -> delete();
      \Session::flash('flashmsg', 'SLIDER EXCLUÍDO COM SUCESSO');
      return redirect()->route('sliders.exibir', ['lang' => \Session::get('lang')]);
   }

}
