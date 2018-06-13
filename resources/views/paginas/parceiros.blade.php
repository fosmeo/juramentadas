@extends('layouts.layout-pages')

@section('content_single_pages')

   <div class="container">
      <div class="row">

         <div class="section-title text-center">
            <h3>Conheça nossos Parceiros</h3>
         </div>
         <br><br>
         @foreach ($parceiros as $parceiro)
            <a href="{{ $parceiro -> clientes_site }}" target="_blank">
            <div class="col-md-2 col-sm-4 col-xs-6" style="padding:10px">
               <img style="width:90px;" src="{{ asset('storage/imagens/img_clientes/'.$parceiro -> clientes_logo) }}">
            </div>
            </a>
            @endforeach
      </div>
   </div>

   <div class="text-center" style="padding:5px">
      {{ $parceiros -> appends(Request::Input())->links() }}
   </div>

@stop
