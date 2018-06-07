@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="container-fluid">
      <form class="row" method="POST" action="{{route('footer.atualizar', $id)}}">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         @foreach ($footers as $footer)
            <div class="col-md-3">
               <label>Links (Coluna1)</label>
               <textarea rows="10" class="form-control" name="footer_col1">
                  {{ $footer -> footer_col1 }}
               </textarea>
            </div>
            <div class="col-md-3">
               <label>Endereço (Coluna2)</label>
               <textarea rows="10" class="form-control" name="footer_col2">
                  {{ $footer -> footer_col2 }}
               </textarea>
            </div>
            <div class="col-md-3">
               <label>Contatos (Coluna3)</label>
               <textarea rows="10" class="form-control" name="footer_col3">
                  {{ $footer -> footer_col3 }}
               </textarea>
            </div>
            <div class="col-md-3">
               <label>Redes Sociais (Coluna4)</label>
               <textarea rows="10" class="form-control" name="footer_col4">
                  {{ $footer -> footer_col4 }}
               </textarea>
            </div>
         @endforeach
         <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
      </form>
   </div>
@stop
