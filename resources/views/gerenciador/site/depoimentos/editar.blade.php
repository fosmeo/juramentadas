@extends('layouts.layout-dashboard')

@section('content')

   <div class="row">
      <form class="col-md-12" style="float:left" method="GET" action="{{ route('depoimentos.inserir')}}">
         <input type="submit" class="btn btn-success col-md-12" value="INSERIR DEPOIMENTOS">
      </form>
   </div>

   <div class="col-md-12">
      <form class="form-group" style="" method="POST" action="" enctype="multipart/form-data" onsubmit = "return confirm('Tem certeza que deseja excluir?')">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="DELETE">
         <input type="submit" class="btn btn-danger col-md-12" value="Excluir Depoimentos">
      </form>
      <br><br>
      <form class="form-group" method="POST" action="{{ route( 'depoimentos.atualizar.logo', $id_depoimento ) }}" enctype="multipart/form-data">
         <img style="width:200px;" src="{{ asset('storage/imagens/img_depoimentos/'.$caminho_imagem) }}" >
         <input type="file" name="depoimentos_imagem">
         <button type="submit" class="btn btn-primary">Atualizar Depoimento</button>
      </form>

      @foreach ($depoimentos as $depoimento)
         <form class="form-group" method="POST" action="{{ route( 'depoimentos.atualizar', $depoimento -> id ) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>Depoimento Idioma :{!! $depoimento -> tab_lang !!}</label>
            <textarea name = "depoimentos_texto" rows="5" class="form-control">
               {{ $depoimento -> depoimentos_texto }}
            </textarea>
            <button type="submit" class="btn btn-primary">Atualizar Depoimento</button>

            <form style="float:left" method="POST" action="{{ route('depoimentos.excluir', $depoimento -> id) }}" onsubmit = "return confirm('Tem certeza que deseja excluir?')">
               {{csrf_field()}}
               <input name="_method" type="hidden" value="POST">
               <button type="submit" class="btn btn-danger">Excluir</button>
            </form>

         </form>
      @endforeach

   </div>
@endsection
