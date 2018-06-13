@extends('layouts.layout-pages')

@section('content_single_pages')
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
                 <h3>{{ $servicos -> textos_titulo2 }}</h3>
                 <p></p>
            </div>
            <br>
            <div class="tabs">
               {!! nl2br($servicos -> textos_texto) !!}
            </div>

      </div>
   </div>
@stop
