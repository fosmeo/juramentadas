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

   public function gerenciadorSlidersLista()
   {
      $sliders = Slider::select() -> groupBy('id_slider') -> get();
      return view ('gerenciador.site.sliders.lista' , ['sliders' => $sliders]);
   }


   public function gerenciadorSlidersEditar($id_slider)
   {

      $sliders = Slider::where('id_slider', '=', $id_slider) -> get();
      $array_imagem = $sliders-> toArray();
      $caminho_imagem = $array_imagem[0]['slider_imagem']; //pega o nome da imagem(pelo array) para enviar para a view
      return view ('gerenciador.site.sliders.editar' , ['sliders' => $sliders, 'caminho_imagem' => $caminho_imagem, 'id_slider' => $id_slider]);
   }

   public function gerenciadorSlidersGravar(Request $request)
   {

      // $this -> validate($request,[
      //   'slider_imagem' => ['required']
      // ]);

      if($request -> hasfile('slider_imagem')){
         $arquivo_novo = $request->file('slider_imagem') -> getClientOriginalName();
         Storage::putFileAs('imagens/img_sliders/', $request -> file('slider_imagem'), $arquivo_novo);
      }else{
         $arquivo_novo = null;
      }

      $id_ultimo = Slider::select('id_slider') -> orderby('id_slider', 'DESC') -> first();

      if(is_null($id_ultimo)){
         $id_proximo = 1;
      }else{
         $id_proximo = $id_ultimo -> id_slider + 1;
      }

      $gravar = Slider::insert([
         [
            'id_slider' => $id_proximo,
            'slider_titulo' => $request -> slider_titulo_pt,
            'slider_texto' => $request -> slider_texto_pt,
            'slider_botao' => $request -> slider_botao_pt,
            'slider_link_botao' => $request -> slider_link_botao_pt,
            'slider_imagem' => $arquivo_novo,
            'tab_lang' => 'pt'
         ],
         [
            'id_slider' => $id_proximo,
            'slider_titulo' => $request -> slider_titulo_en,
            'slider_texto' => $request -> slider_texto_en,
            'slider_botao' => $request -> slider_botao_en,
            'slider_link_botao' => $request -> slider_link_botao_en,
            'slider_imagem' => $arquivo_novo,
            'tab_lang' => 'en'
         ],
         [
            'id_slider' => $id_proximo,
            'slider_titulo' => $request -> slider_titulo_es,
            'slider_texto' => $request -> slider_texto_es,
            'slider_botao' => $request -> slider_botao_es,
            'slider_link_botao' => $request -> slider_link_botao_es,
            'slider_imagem' => $arquivo_novo,
            'tab_lang' => 'es'
         ],
         [
            'id_slider' => $id_proximo,
            'slider_titulo' => $request -> slider_titulo_it,
            'slider_texto' => $request -> slider_texto_it,
            'slider_botao' => $request -> slider_botao_it,
            'slider_link_botao' => $request -> slider_link_botao_it,
            'slider_imagem' => $arquivo_novo,
            'tab_lang' => 'it'
         ]
      ]);


      \Session::flash('flashmsg', 'SLIDERS GRAVADOS COM SUCESSO');
      return redirect()->route('sliders.lista');
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



   public function gerenciadorSlidersExcluir($id_slider){

      $slider_imagem = Slider::select('slider_imagem') -> where('id_slider', '=', $id_slider) -> first();
      $exclui_imagem = $slider_imagem -> slider_imagem;
      Storage::delete('imagens/img_sliders/'.$exclui_imagem);
      $slider_excluir = Slider::where('id_slider', '=', $id_slider) -> delete();
      \Session::flash('flashmsg', 'SLIDER EXCLUÍDO COM SUCESSO');
      return redirect()->route('sliders.lista');

   }
}
