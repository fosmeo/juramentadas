@extends('layouts.layout-pages')

@section('content_single_pages')

   <div class="container">
      <div class="row">
         <div class="col-md-12">

            <div class="section-title text-center">
               <h3>{{ $traduz_global['idiomas_titulo1'] }}</h3>
               <p>{{ $traduz_global['idiomas_titulo2'] }}</p>
            </div>
            <br>
            <div class="tabs">
                  {{--
                  {!! nl2br($idiomas -> idiomas_texto) !!}
                  <div class="col-md-2 col-sm-4 col-xs-6" style="padding:10px">
                  --}}
                  <p>{!! $traduz_global['idiomas_texto1'] !!}</p>
                  {!! htmlspecialchars_decode($idiomas -> idiomas_texto) !!}

            </div>

         </div>
      </div>
   </div>

@stop
