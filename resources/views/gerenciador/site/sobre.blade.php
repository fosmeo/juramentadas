@extends('layouts.layout-dashboard')

@section('content')

   <div class="form-group marginsV col-md-12">
      @foreach ($sobres as $sobre)
         <form class="row" method="POST" action="{{route('sobre.atualizar', $sobre -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Texto {!! $sobre -> id_lang !!}</label>
            <textarea name = "sobre_texto" rows="9" class="form-control">
               {{ $sobre -> sobre_texto }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach
      <br><hr><br>
   </div>
@stop
