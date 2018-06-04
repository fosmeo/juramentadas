@extends('layouts.layout-dashboard')

@section('content')

   <div class="container-fluid">
      <br>
      <div class="row">
         <form class="col-md-12" style="float:left" method="GET" action="{{ route('clientes.inserir')}}">
            <button type="submit" class="btn btn-success col-md-12">Inserir Novo Cliente</button>
         </form>
      </div>
      <br>
      <table class="col-md-12">
         <th>ID</th>
         <th>Imagem</th>
         <th>Site</th>
         <th>Ações</th>
         <tbody>
            @foreach($clientes as $cliente)
               <tr class="table">
                  <td>{{ $cliente -> id }}</td>
                  <td><img style="width:150px;" src="{{ asset('storage/imagens/img_clientes/'.$cliente -> clientes_logo) }}"></td>
                  <td><a href="{{ $cliente -> clientes_site }}" target="_blank">{{ $cliente -> clientes_site }}</a></td>
                  <td>

                     <form style="float:left" method="GET" action="{{ route('clientes.editar', $cliente -> id) }}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary">Editar</button>
                     </form>
                     <form style="float:left" method="POST" action="{{ route('clientes.excluir', $cliente -> id) }}" onsubmit = "return confirm('Tem certeza que deseja excluir?')">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                     </form>

               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
</div>
<div class="text-center" style="padding:5px">
{{ $clientes -> appends(Request::Input())->links() }}
</div>
@stop
