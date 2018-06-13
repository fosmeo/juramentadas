@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">

      @foreach ($cidadanias as $cidadania)
         <form method="POST" action="{{ route('cidadania.atualizar', $cidadania -> id) }}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">

            <label>Titulo</label>
            <input type="text" name="cidadania_titulo" value="{{ $cidadania -> cidadania_titulo }}" class="form-control">
            <br>

            <label>Texto</label>
            <textarea rows="20" name="cidadania_texto" class="form-control">
               {{ $cidadania -> cidadania_texto }}
            </textarea>
            <br>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
         <br>
         <hr>
      @endforeach

   </div>
@stop
