@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="container-fluid">
            <form method="POST" action="{{ route('clientes.gravar')}}" enctype="multipart/form-data">
            {{csrf_field()}}
               <table class="col-md-12">
                  <th>Logo</th>
                  <th>Site</th>
                  <th></th>
                  <tbody>
                        <tr class="table">
                           <td><input type="file" name="clientes_logo"></td>
                           <td><input type="text" value="" class="form-control" name="clientes_site"></td>
                           <td><button type="submit" class="col-md-12 btn btn-primary">Gravar</button></td>
                        </tr>
               </tbody>
            </table>
      </form>
   </div>
@stop
