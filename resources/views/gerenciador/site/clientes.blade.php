@extends('layouts.layout-dashboard')

@section('content')
   <div class="container-fluid">
      <table class="table" style="font-size:12px">
         <th>ID</th>
         <th>Imagem</th>
         <th>Site</th>
         <tbody>
            @foreach($clientes as $cliente)
               <tr>
                  <td>{{ $cliente -> clientes_id }}</td>
                  <td>{{ $cliente -> clientes_path }}</td>
                  <td>{{ $cliente -> clientes_site }}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   {{-- <div style="padding:5px">
      {{ $clientes -> appends(Request::Input())->links() }}
   </div> --}}
@stop
