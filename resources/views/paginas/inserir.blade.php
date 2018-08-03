@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="col-md-12">
      <h4 class="text-center">Inserindo em: {{ \Session::get('languser')}}</h4>
      <form method="POST" action="{{ route('sobre.gravar')}}" enctype="multipart/form-data">
         {{csrf_field()}}
         <label>Imagem:</label>
         <input type="file" name="sobre_imagem">
         <br>
         <label>Titulo:</label>
         <input name = "sobre_titulo" rows="5" class="form-control">
         <label>Texto:</label>
         <textarea name = "sobre_texto" rows="5" class="form-control"></textarea>
         <br>
         <td><button type="submit" class="col-md-12 btn btn-primary">Gravar</button></td>
      </form>
   </div>
@stop
