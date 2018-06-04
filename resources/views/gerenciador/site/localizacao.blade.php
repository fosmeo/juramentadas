@extends('layouts.layout-dashboard')

@section('content')

   <div class="form-group marginsV col-md-12">
      <form class="" method="POST" action="{{ route('local.atualizar', $id) }}">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         @foreach ($locales as $local)
            <label>Titulo</label>
            <input type="text" value="{{ $local -> localizacao_titulo }}" class="form-control" name="localizacao_titulo">
            <label>Endereço</label>
            <textarea rows="4" class="form-control" name="localizacao_col1">
               {{ $local -> localizacao_col1 }}
            </textarea>
            <label>Telefones</label>
            <textarea rows="3" class="form-control" name="localizacao_col2">
               {{ $local -> localizacao_col2 }}
            </textarea>
            <label>Email</label>
            <input type="text" value="{{ $local -> localizacao_col3 }}" class="form-control" name="localizacao_col3">
            <label>Horario de funcionamento</label>
            <input type="text" value="{{ $local -> localizacao_col4 }}" class="form-control" name="localizacao_col4">
         @endforeach
         <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
      </form>
   </div>
@stop
