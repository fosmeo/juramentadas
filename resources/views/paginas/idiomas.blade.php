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

                     <p>{!! $traduz_global['idiomas_texto1'] !!}</p>

                     @for ($i=0; $i < count($idiomas) - 1; $i++)
                        <div class="col-md-6">
                           <span>{{ $idiomas[$i]}}</span>
                        </div>
                     @endfor
               </div>
         </div>
      </div>
   </div>

@stop
