@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">
      @foreach ($sobres as $sobre)
         <form class="row" method="POST" action="{{route('sobre.atualizar', $sobre -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Texto {!! $sobre -> texto_posicao !!}</label>
            <textarea name = "col1" rows="5" class="form-control">
               {{ $sobre -> col1 }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach
      <br><hr><br>
   </div>
@stop
