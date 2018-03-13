@extends('layouts.layout-dashboard')

@section('content')
   <table class="table" style="font-size:8px">
      <th>ID</th>
      <th>PF/PJ</th>
      <th>Nome</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>Tel.</th>
      <th>EMail</th>
      <th>Obs.</th>
      <th>hora</th>
      <tbody>
         @foreach($orcamentos as $orcamento)
            <tr>

               <td>{{ $orcamento -> orcamentos_id }}</td>
               <td>{{ $orcamento -> orcamentos_pfpj }}</td>
               <td>{{ $orcamento -> orcamentos_nome }}</td>
               <td>{{ $orcamento -> orcamentos_cidade }}</td>
               <td>{{ $orcamento -> orcamentos_est }}</td>
               <td>{{ $orcamento -> orcamentos_tel }}</td>
               <td>{{ $orcamento -> orcamentos_email }}</td>
               <td>{{ $orcamento -> orcamentos_obs }}</td>
               <td>{{ $orcamento -> hora }}</td>
               <td>
                  <a href="{{ $orcamento -> orcamentos_id }}/editar_pessoas" class="btn btn-primary">Editar</a>

                  {!! Form::open(['method' => 'DELETE' , 'url' => $orcamento -> orcamentos_id, 'style' => 'display:inline', 'onsubmit' => 'return confirm("Tem certeza que deseja excluir?")']) !!}

                  <button type="submit" href="{{ $orcamento -> orcamentos_id }}/excluir" class="btn btn-danger" value="excluir">Excluir</button>

                  {!!Form::close()!!}
               </td>
            </tr>

         @endforeach
      </tbody>
   </table>
   <div style="padding:5px">
      {{ $orcamentos -> appends(Request::Input())->links() }}
   </div>
@stop
