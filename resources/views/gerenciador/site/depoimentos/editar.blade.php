@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <form class="form-group col-md-12" method="GET" action="{{ route('depoimentos.inserir')}}">
      <input type="submit" class="btn btn-success col-md-12" value="Inserir Depoimentos">
   </form>

   <form class="form-group col-md-12" method="POST" action="{{ route('depoimentos.excluir', $id_depoimento) }}" onsubmit = "return confirm('Tem certeza que deseja excluir todos os depoimentos?')">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="DELETE">
      <button type="submit" class="btn btn-danger col-md-12">Excluir Depoimentos</button>
   </form>

   <br><br>

   <img style="width:200px;" src="{{ asset('storage/imagens/img_depoimentos/'.$caminho_imagem) }}" >

   <form class="form-group col-md-12" method="POST" action="{{ route( 'depoimentos.atualizar.logo', $id_depoimento ) }}" enctype="multipart/form-data">
      <input type="file" name="depoimentos_imagem" style="float:left">
      {{csrf_field()}}
      <input name="_method" type="hidden" value="PATCH">
      <button type="submit" class="btn btn-primary">Atualizar Logo</button>
   </form>

   <div class="col-md-12">
      <form class="form-group" method="POST" action="{{ route( 'depoimentos.atualizar', $id_depoimento) }}" enctype="multipart/form-data">
         @foreach ($depoimentos as $depoimento)
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Depoimento Idioma :{!! $depoimento -> tab_lang !!}</label>
            <textarea name = "depoimentos_texto[]" rows="5" class="form-control">
               {{ $depoimento -> depoimentos_texto }}
            </textarea>
            <br>
         @endforeach
         <button type="submit" class="btn btn-primary col-md-12">Atualizar Depoimentos</button>
      </form>

   </div>
@endsection
