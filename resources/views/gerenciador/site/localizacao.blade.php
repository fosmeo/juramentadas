@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">
      <form class="" method="POST" action="{{route('local.atualizar', $id)}}">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         @foreach ($locales as $local)
            <label>Titulo</label>
            <input type="text" value="{{ $local -> titulo }}" class="form-control" name="titulo">
            <label>Endereço</label>
            <textarea rows="2" class="form-control" name="col1">
               {{ $local -> col1 }}
            </textarea>
            <label>Telefones</label>
            <textarea rows="2" class="form-control" name="col2">
               {{ $local -> col2 }}
            </textarea>
            <label>Email</label>
            <input type="text" value="{{ $local -> col3 }}" class="form-control" name="col3">
            <label>Horario de funcionamento</label>
            <input type="text" value="{{ $local -> col4 }}" class="form-control" name="col4">
         @endforeach
         <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
      </form>
   </div>
@stop
