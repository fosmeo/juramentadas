@extends('layouts.layout-pages')

@section('content_single_pages')

   <div class="container">
      <div class="row">
         <div class="col-md-12">

            <div class="section-title text-center">
               <h3>IDIOMAS</h3>
            </div>

            <div class="tabs">
                  {!! nl2br($idiomas -> idiomas_texto) !!}
            </div>

         </div>
      </div>
   </div>

@stop
