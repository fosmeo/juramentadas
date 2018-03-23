@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="row">
      <form class="col-md-12" style="float:left" method="GET" action="{{ route('depoimentos.inserir')}}">
         <input type="submit" class="btn btn-success col-md-12" value="Inserir Novo Depoimento">
      </form>
   </div>

   <div class="col-md-12">
      @foreach ($depoimentos as $depoimento)

         <form class="form-group" method="POST" action="{{ route('depoimentos.atualizar', [$depoimento -> id, $depoimento -> textos_posicao]) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">

            <label>Depoimento {!! $depoimento -> textos_posicao !!}</label>
            <textarea name = "col1" rows="5" class="form-control">
               {{ $depoimento -> col1 }}
            </textarea>

            <img style="width:200px;" src="{{ asset('storage/imagens/img_depoimentos/'.$depoimento -> depoimentos_logo) }}" >
            <input type="file" name="depoimentos_logo">
            <br>
            <button type="submit" class="btn btn-primary col-md-12">Gravar</button>
         </form>

         <form class="form-group" style="" method="POST" action="{{ route('depoimentos.excluir', [$depoimento -> textos_posicao]) }}" enctype="multipart/form-data" onsubmit = "return confirm('Tem certeza que deseja excluir?')">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger">Excluir</button>
         </form>

      </form>
      <div style="border-top:2px solid;margin-bottom:50px;margin-top:50px"></div>
   @endforeach
</div>
@stop