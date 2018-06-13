@extends('layouts.layout-pages')

@section('content_single_pages')

   <div class="container">
      <div class="row">
         <div class="col-md-12">

            <div class="section-title text-center">
               <h3>{{ $traduz_global['idiomas_titulo1'] }}</h3>
               <p>{{ $traduz_global['idiomas_titulo2'] }}</p>
            </div>

            <div class="tabs">
                  {!! nl2br($idiomas -> idiomas_texto) !!}
            </div>

         </div>
      </div>
   </div>

@stop
