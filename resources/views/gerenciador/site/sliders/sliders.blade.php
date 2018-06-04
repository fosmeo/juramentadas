@extends('layouts.layout-dashboard')

@section('content')

   <div class="row">
      <form class="col-md-12" style="float:left" method="GET" action="{{ route('sliders.inserir')}}">
         <input type="submit" class="btn btn-success col-md-12" value="Inserir Novo Slider">
      </form>
   </div>

   <div class="form-group marginsV col-md-12">
      @foreach ($sliders as $slider)
         <form class="form-group" enctype="multipart/form-data" method="POST" action="{{ route('sliders.atualizar', $slider -> id) }}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="{{ $slider -> slider_titulo }}" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="{{ $slider -> slider_texto }}" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="{{ $slider -> slider_botao }}" class="form-control" name="slider_botao">
            <br>
            <img style="width:200px;" src="{{ asset('storage/imagens/img_sliders/'.$slider -> slider_imagem) }}" >
            <input type="file" name="slider_imagem">
            <button type="submit" class="col-md-12 btn btn-primary">Atualizar</button>
         </form>
      @endforeach
   </div>
@stop
