@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="container-fluid">
            <form method="POST" action="{{ route('clientes.atualizar', $cliente -> id) }}" enctype="multipart/form-data">

               {{csrf_field()}}
               <input name="_method" type="hidden" value="PATCH">

               <table class="col-md-12">
                  <th>ID</th>
                  <th>Logo</th>
                  <th>Site (USAR HTTP://)</th>
                  <tbody>
                        <tr class="table">
                           <td>{{$cliente -> id}}</td>
                           <td><img style="width:120px;" src="{{ asset('storage/imagens/img_clientes/'.$cliente -> clientes_logo) }}"></td>
                           <td><input type="text" value="{{ $cliente -> clientes_site }}" class="form-control" name="clientes_site"></td>
                           <td><button type="submit" class="col-md-12 btn btn-primary">Gravar</button></td>
                        </tr>
               </tbody>
            </table>

            <div class="col-md-12" style="padding:20px;border:1px solid" >
               Substituir Logo
               <input type="file" name="clientes_logo">
            </div>

      </form>
   </div>
@stop
