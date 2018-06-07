@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="container-fluid">
      <br>
      <div class="row">
         <form class="col-md-12" style="float:left" method="GET" action="{{ route('sliders.inserir')}}">
            <button type="submit" class="btn btn-success col-md-12">Inserir Novo Slider</button>
         </form>
      </div>
      <br>
      <table class="col-md-12">
         <th>ID</th>
         <th>Imagem</th>
         <th>Ações</th>
         <tbody>
            @foreach($sliders as $slider)
               <tr class="table">
                  <td>{{ $slider -> id_slider }}</td>
                  <td><img style="width:150px;" src="{{ asset('storage/imagens/img_sliders/'.$slider -> slider_imagem) }}"></td>
                  <td>
                     <form style="float:left" method="GET" action="{{ route('sliders.editar', $slider -> id_slider) }}">
                        <button type="submit" class="btn btn-primary">Editar</button>
                     </form>
                     <form style="float:left" method="POST" action="{{ route('sliders.excluir', $slider -> id_slider) }}" onsubmit = "return confirm('Tem certeza que deseja excluir esse slider?')">
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
@stop
