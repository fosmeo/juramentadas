@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="container-fluid">
      <form class="row" method="POST" action="{{route('footer.atualiza', $id)}}">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         @foreach ($footers as $footer)
            <div class="col-md-3">
               <label>Links (Coluna1)</label>
               <textarea rows="10" class="form-control" name="col1">
                  {{ $footer -> col1 }}
               </textarea>
            </div>
            <div class="col-md-3">
               <label>Endereço (Coluna2)</label>
               <textarea rows="10" class="form-control" name="col2">
                  {{ $footer -> col2 }}
               </textarea>
            </div>
            <div class="col-md-3">
               <label>Contatos (Coluna3)</label>
               <textarea rows="10" class="form-control" name="col3">
                  {{ $footer -> col3 }}
               </textarea>
            </div>
            <div class="col-md-3">
               <label>Redes Sociais (Coluna4)</label>
               <textarea rows="10" class="form-control" name="col4">
                  {{ $footer -> col4 }}
               </textarea>
            </div>
         @endforeach
         <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
      </form>
   </div>
@stop
