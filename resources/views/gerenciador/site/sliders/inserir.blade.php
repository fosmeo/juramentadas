@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <h3>Inserindo novo slider</h3><br>

   <div class="form-group marginsV col-md-12">
         <form class="form-group" enctype="multipart/form-data" method="POST" action="{{ route('sliders.gravar') }}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="" class="form-control" name="slider_botao">
            <br>
            <input type="file" name="slider_imagem">
            <button type="submit" class="col-md-12 btn btn-primary">Atualizar</button>
         </form>
   </div>
@stop
