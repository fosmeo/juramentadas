@extends('layouts.layout-dashboard')

@section('content')

   <div class="form-group marginsV col-md-12">
      <form class="form-group col-md-12" method="GET" action="{{ route('sobre.inserir')}}">
         <input type="submit" class="btn btn-success col-md-12" value="Inserir Novo Item (SOBRE A EMPRESA)">
      </form>
      @foreach ($sobres as $sobre)
         <br><br>
         <form class="row" method="POST" action="{{route('sobre.atualizar', $sobre -> id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <img style="width:200px;" alt="{{ $sobre -> sobre_imagem }}" src="{{ asset('storage/imagens/img_sobre/'.$sobre -> sobre_imagem) }}">
            <input type="file" name="sobre_imagem">
            <br>
            <label>Título {!! $sobre -> id_lang !!}</label>
            <input name = "sobre_titulo" rows="9" class="form-control" value="{{ $sobre -> sobre_titulo }}">
            <label>Texto {!! $sobre -> id_lang !!}</label>
            <textarea name = "sobre_texto" rows="9" class="form-control">
               {{ $sobre -> sobre_texto }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
         <form style="float:left" method="POST" action="{{ route('sobre.excluir', $sobre -> id_sobre) }}" onsubmit = "return confirm('Tem certeza que deseja EXCLUIR TODOS OS ITENS(IDIOMAS) DESSA SEÇÃO?')">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger">Excluir</button>
         </form>
      @endforeach
   </div>
@stop
