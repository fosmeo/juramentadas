@extends('layouts.layout-dashboard')

@section('content')
   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="col-md-12">
      <form method="POST" action="{{ route('depoimentos.gravar')}}" enctype="multipart/form-data">
         {{csrf_field()}}

         <label>Depoimento(Português)</label>
         <textarea name = "col1-pt" rows="5" class="form-control"></textarea>
         <label>Depoimento(Inglês)</label>
         <textarea name = "col1-en" rows="5" class="form-control"></textarea>
         <label>Depoimento(Espanhol)</label>
         <textarea name = "col1-es" rows="5" class="form-control"></textarea>
         <label>Depoimento(Italiano)</label>
         <textarea name = "col1-it" rows="5" class="form-control"></textarea>
         <label>Logo</label>
         <td><input type="file" name="depoimentos_logo"></td>
         <br>
         <td><button type="submit" class="col-md-12 btn btn-primary">Gravar</button></td>
      </form>
   </div>
@stop
