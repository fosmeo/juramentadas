@extends('layouts.layout-dashboard')

@section('content')


   <form class="col-md-12" style="float:left" method="GET" action="{{ route('sliders.inserir')}}">
      <input type="submit" class="btn btn-success col-md-12" value="Inserir Novo Slider">
   </form>

   <br><br>
   <img style="width:200px;" src="{{ asset('storage/imagens/img_sliders/'.$caminho_imagem) }}" >
   <br><br>

   <form class="form-group col-md-12" method="POST" action="{{ route( 'sliders.atualizar.imagem', $id_slider ) }}" enctype="multipart/form-data">
      <input type="file" name="slider_imagem" style="float:left">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <button type="submit" class="btn btn-primary">Atualizar Imagem</button>
   </form>
   <br><br>
   <div class="form-group marginsV col-md-12">
      <form class="form-group" enctype="multipart/form-data" method="POST" action="{{ route('sliders.atualizar', $id_slider) }}">

         @foreach ($sliders as $slider)

            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <h4 class="text-center">IDIOMA : {{ $slider -> tab_lang}}</h4>
            <label>Slider Título</label>
            <input type="text" value="{{ $slider -> slider_titulo }}" class="form-control" name="slider_titulo[]">
            <label>Slider Texto</label>
            <input type="text" value="{{ $slider -> slider_texto }}" class="form-control" name="slider_texto[]">
            <label>Slider Botão</label>
            <input type="text" value="{{ $slider -> slider_botao }}" class="form-control" name="slider_botao[]">
            <label>Slider Link Botão</label>
            <input type="text" value="{{ $slider -> slider_link_botao }}" class="form-control" name="slider_link_botao[]">
            <br>
         @endforeach

         <button type="submit" class="col-md-12 btn btn-primary">Atualizar Slider</button>

      </form>
   </div>
@stop
