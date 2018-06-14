@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="form-group marginsV col-md-12">

      <form class="form-group col-md-12" method="GET" action="{{ route('faq.inserir')}}">
         <input type="submit" class="btn btn-success col-md-12" value="Inserir Novo Item (SOBRE A EMPRESA)">
      </form>

      @foreach ($faqs as $faq)

            <form method="POST" action="{{ route( 'faq.atualizar', [ $faq -> id, \Session::get('languser')] ) }}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">

               <label>Pergunta:</label>
               <input type="text" name="faq_pergunta" value="{{ $faq -> faq_pergunta }}" class="form-control">
               <br>

               <label>Resposta:</label>
               <textarea rows="4" name="faq_resposta" class="form-control">
                  {{ $faq -> faq_resposta }}
               </textarea>
               <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
            </form>
            <form method="POST" action="{{ route( 'faq.excluir', $faq -> id ) }}">
               {{csrf_field()}}
               <input name="_method" type="hidden" value="DELETE">
               <input type="submit" class="col-md-2 btn btn-danger" value="Excluir">
            </form>
         <br>
         <hr>
         <br>
      @endforeach
   </div>
@stop
