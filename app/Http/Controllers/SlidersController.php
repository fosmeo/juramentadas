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

   public function gerenciadorSliderAtualizarImagem(Request $request, $id_slider){

    $this -> validate($request,[
      'slider_imagem' => ['required']
    ]);

    // GRAVA O ARQUIVO NOVO NO DISCO
      $arquivo_novo = $request->file('slider_imagem') -> getClientOriginalName();
      Storage::putFileAs('imagens/img_sliders/', $request -> file('slider_imagem'), $arquivo_novo);
    //

    // Exclui o arquivo antigo do DB e do disco
      $slider_imagem = Slider::select('slider_imagem') -> where('id_slider', '=', $id_slider) -> first();
      $exclui_imagem = $slider_imagem -> slider_imagem;
      Storage::delete('imagens/img_sliders/'.$exclui_imagem);
      $atualizar_imagem = Slider::where('id_slider', '=', $id_slider) -> update(['slider_imagem' => $arquivo_novo]);
    //

    \Session::flash('flashmsg', 'IMAGEM DO SLIDER ATUALIZADA COM SUCESSO');
    return redirect()->route('sliders.lista');
   }

   public function gerenciadorSlidersAtualizar(Request $request, $id_slider)
   {

    // RECEBE ARRAY INPUT DO REQUEST 0 ='pt' | 1 = 'en' | 2 = 'es' | 3 = 'it'
    Slider::where(['tab_lang' => 'pt', 'id_slider' => $id_slider]) -> update(

      [
        'slider_titulo' => $request -> slider_titulo[0],
        'slider_texto' => $request -> slider_texto[0],
        'slider_botao' => $request -> slider_botao[0],
        'slider_link_botao' => $request -> slider_link_botao[0]
      ]);

    Slider::where(['tab_lang' => 'en', 'id_slider' => $id_slider]) -> update(
      [
        'slider_titulo' => $request -> slider_titulo[1],
        'slider_texto' => $request -> slider_texto[1],
        'slider_botao' => $request -> slider_botao[1],
        'slider_link_botao' => $request -> slider_link_botao[1]
      ]);
    Slider::where(['tab_lang' => 'es', 'id_slider' => $id_slider]) -> update(
      [
        'slider_titulo' => $request -> slider_titulo[2],
        'slider_texto' => $request -> slider_texto[2],
        'slider_botao' => $request -> slider_botao[2],
        'slider_link_botao' => $request -> slider_link_botao[2]
      ]);
    Slider::where(['tab_lang' => 'it', 'id_slider' => $id_slider]) -> update(
      [
        'slider_titulo' => $request -> slider_titulo[3],
        'slider_texto' => $request -> slider_texto[3],
        'slider_botao' => $request -> slider_botao[3],
        'slider_link_botao' => $request -> slider_link_botao[3]
      ]);

    \Session::flash('flashmsg', 'SLIDER ATUALIZADO COM SUCESSO');
    return redirect()->route('sliders.lista');

   }

   public function gerenciadorSlidersExcluir($id_slider){

      $slider_imagem = Slider::select('slider_imagem') -> where('id_slider', '=', $id_slider) -> first();
      $exclui_imagem = $slider_imagem -> slider_imagem;
      if (!is_null($exclui_imagem)){
         Storage::delete('imagens/img_sliders/'.$exclui_imagem);
      }
      $slider_excluir = Slider::where('id_slider', '=', $id_slider) -> delete();

      \Session::flash('flashmsg', 'SLIDER EXCLUÍDO COM SUCESSO');
      return redirect()->route('sliders.lista');
   }
}
