@extends('layouts.layout-dashboard')

@section('content')

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
            <input type="text" name="titulo" value="{{ $cidadania -> titulo }}" class="form-control">
            <br>

            <label>Texto</label>
            <textarea rows="20" name="col1" class="form-control">
               {{ $cidadania -> col1 }}
            </textarea>
            <br>

            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>

         </form>

         <br>
         <hr>
         <br>

      @endforeach

   </div>
@stop
