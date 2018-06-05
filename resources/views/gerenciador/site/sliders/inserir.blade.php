@extends('layouts.layout-dashboard')

@section('content')

   <h3>Inserindo novo slider</h3><br>

   <div class="form-group marginsV col-md-12">
         <form class="form-group" enctype="multipart/form-data" method="POST" action="{{ route('sliders.gravar') }}">

            <input type="file" name="slider_imagem">

            <br>

            {{csrf_field()}}
            <h4 class="text-center">Português</h4>
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao">
            <br>
            <h4 class="text-center">Inglês</h4>
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao">
            <br>
            <h4 class="text-center">Espanhol</h4>
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao">
            <br>
            <h4 class="text-center">Italiano</h4>
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao">
            <label>Slider Link Botão</label>
            <input type="text" value="" class="form-control" name="slider_link_botao">
            <br>

            <button type="submit" class="col-md-12 btn btn-primary">Atualizar</button>
         </form>
   </div>
@stop
