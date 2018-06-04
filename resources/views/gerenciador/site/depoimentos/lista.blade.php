@extends('layouts.layout-dashboard')

@section('content')

   <div class="container-fluid">
      <br>
      <div class="row">
         <form class="col-md-12" style="float:left" method="GET" action="{{ route('depoimentos.inserir')}}">
            <button type="submit" class="btn btn-success col-md-12">Inserir Depoimento</button>
         </form>
      </div>
      <br>
      <table class="col-md-12">
         <th>ID</th>
         <th>Imagem</th>
         <th>Ações</th>
         <tbody>
            @foreach($depoimentos as $depoimento)
               <tr class="table">
                  <td>{{ $depoimento -> id_depoimento }}</td>
                  <td><img style="width:150px;" src="{{ asset('storage/imagens/img_depoimentos/'.$depoimento -> depoimentos_imagem) }}"></td>
                  <td>
                     <form style="float:left" method="GET" action="{{ route('depoimentos.editar', $depoimento -> id_depoimento) }}">
                        <button type="submit" class="btn btn-primary">Editar</button>
                     </form>
                     <form style="float:left" method="POST" action="{{ route('depoimentos.excluir', $depoimento -> id_depoimento) }}" onsubmit = "return confirm('Tem certeza que deseja excluir todos esses depoimentos?')">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Excluir Todos</button>
                     </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
</div>
@stop
