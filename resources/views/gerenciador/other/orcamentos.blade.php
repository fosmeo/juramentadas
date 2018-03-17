@extends('layouts.layout-dashboard')

@section('content')
   <div class="container-fluid">
      <div class="row">
         <table class="col-md-12" style="font-size:12px">
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
                  </tr>

               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   <div class="text-center" style="padding:5px">
      {{ $orcamentos -> appends(Request::Input())->links() }}
   </div>
@stop
