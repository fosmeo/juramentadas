@extends('layouts.layout-dashboard')

@section('content')
   <div class="container-fluid">
      <table class="">
         <th>ID</th>
         <th>Imagem</th>
         <th>Site</th>
         <th>Ações</th>
         <tbody>
            @foreach($clientes as $cliente)
               <tr class="table">
                  <td>{{ $cliente -> clientes_id }}</td>
                  <td><img style="width:80px;" src="{{ asset('storage/imagens/img_clientes/'.$cliente -> clientes_path) }}"></td>
                  <td><input style="width:350px" type="text" value="{{ $cliente -> clientes_site }}" target="blank"></td>
                  <td>
                  <form method="POST" action="" onsubmit = "return confirm('Tem certeza que deseja excluir?')">
                     <button type="submit" href="{{ route('clientes.atualizar', $cliente -> clientes_id) }}" class="btn btn-primary" value="excluir">Editar</button>
                     <button type="submit" href="{{ route('clientes.excluir', $cliente -> clientes_id) }}" class="btn btn-danger" value="excluir">Excluir</button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
</div>
{{-- <div style="padding:5px">
{{ $clientes -> appends(Request::Input())->links() }}
</div> --}}
@stop
