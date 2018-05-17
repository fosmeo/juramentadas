@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">
      @foreach ($sliders as $slider)
         <form class="row" method="POST" action="{{ route('slider.atualizar', $slider -> id) }}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Slider Título</label>
            <input type="text" value="{{ $slider -> slider_titulo }}" class="form-control" name="slider_titulo">
            <label>Slider Texto</label>
            <input type="text" value="{{ $slider -> slider_texto }}" class="form-control" name="slider_texto">
            <label>Slider Botão</label>
            <input type="text" value="{{ $slider -> slider_botao }}" class="form-control" name="slider_botao">
            <br>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach
   </div>
@stop
