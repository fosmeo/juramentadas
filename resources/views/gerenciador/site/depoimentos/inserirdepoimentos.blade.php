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
         <label>Logo da empresa:</label>
         <input type="file" name="depoimentos_logo">
         <br>
         <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         <br>
         <label>Depoimento(Português)</label>
         <textarea name = "depoimento_pt" rows="5" class="form-control"></textarea>
         <label>Depoimento(Inglês)</label>
         <textarea name = "depoimento_en" rows="5" class="form-control"></textarea>
         <label>Depoimento(Espanhol)</label>
         <textarea name = "depoimento_es" rows="5" class="form-control"></textarea>
         <label>Depoimento(Italiano)</label>
         <textarea name = "depoimento_it" rows="5" class="form-control"></textarea>
         <br>
         <td><button type="submit" class="col-md-12 btn btn-primary">Gravar</button></td>
      </form>
   </div>
@stop
