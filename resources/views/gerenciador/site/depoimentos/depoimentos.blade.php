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

         <form class="form-group" method="POST" action="{{ route( 'depoimentos.atualizar', $depoimento -> id ) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">

            <label>Depoimento ID:{!! $depoimento -> id !!} (Português)</label>
            <textarea name = "depoimento_pt" rows="5" class="form-control">
               {{ $depoimento -> depoimento_pt }}
            </textarea>

            <label>Depoimento ID:{!! $depoimento -> id !!} (English)</label>
            <textarea name = "depoimento_en" rows="5" class="form-control">
               {{ $depoimento -> depoimento_en }}
            </textarea>

            <label>Depoimento ID:{!! $depoimento -> id !!} (Español)</label>
            <textarea name = "depoimento_es" rows="5" class="form-control">
               {{ $depoimento -> depoimento_es }}
            </textarea>

            <label>Depoimento ID:{!! $depoimento -> id !!} (Italiano)</label>
            <textarea name = "depoimento_it" rows="5" class="form-control">
               {{ $depoimento -> depoimento_it }}
            </textarea>
            <br>
            <img style="width:200px;" src="{{ asset('storage/imagens/img_depoimentos/'.$depoimento -> depoimentos_logo) }}" >
            <input type="file" name="depoimentos_logo">
            <br>
            <button type="submit" class="btn btn-primary">Atualizar Depoimentos</button>

         </form>

         <form class="form-group" style="" method="POST" action="{{ route('depoimentos.excluir', $depoimento -> id ) }}" enctype="multipart/form-data" onsubmit = "return confirm('Tem certeza que deseja excluir?')">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger">Excluir Depoimentos</button>
         </form>

         <div style="border-top:2px solid;margin-bottom:50px;margin-top:50px"></div>

      @endforeach

   </div>

@endsection
