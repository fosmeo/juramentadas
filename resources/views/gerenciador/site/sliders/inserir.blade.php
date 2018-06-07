@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <h3>Inserindo novo slider</h3><br>

   <div class="form-group marginsV col-md-12">
         <form class="form-group" enctype="multipart/form-data" method="POST" action="{{ route('sliders.gravar') }}">

            <input type="file" name="slider_imagem">
            <br>
            {{csrf_field()}}
            <h4 class="text-center">Português</h4>
            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo_pt">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto_pt">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao_pt">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao_pt">
            <br>
            <h4 class="text-center">Inglês</h4>

            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo_en">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto_en">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao_en">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao_en">
            <br>
            <h4 class="text-center">Espanhol</h4>

            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo_es">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto_es">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao_es">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao_es">
            <br>
            <h4 class="text-center">Italiano</h4>

            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo_it">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto_it">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao_it">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao_it">
            <br>

            <button type="submit" class="col-md-12 btn btn-primary">Gravar Sliders</button>
         </form>
   </div>
@stop
