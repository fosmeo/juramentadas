@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="col-md-12">
      <h4 class="text-center">Inserindo em: {{ \Session::get('languser') }}</h4>
      <form method="POST" action="{{ route('faq.gravar') }}" enctype="multipart/form-data">
         {{csrf_field()}}
         <label>Pergunta:</label>
         <input name = "faq_pergunta" class="form-control">
         <label>Texto:</label>
         <textarea name = "faq_resposta" rows="4" class="form-control"></textarea>
         <br>
         <td><button type="submit" class="col-md-12 btn btn-primary">Gravar</button></td>
      </form>
   </div>
@stop
