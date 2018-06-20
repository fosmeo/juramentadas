@extends('layouts.layout-pages')

@section('content_single_pages')

   <section class="testimonial-section" style="background: url( {{ asset('storage/imagens/misc/cartas-recomendacao.jpg') }}); background-attachment:fixed">
      <div class="container">
         <div class="section-title text-center">
             <h3>{{ $traduz_global['cartas'] }}</h3>
         </div>
         <div class="testimonial-carousel-cartas">
             @for ($i=1; $i <=8; $i++)
                <div class="slide-item">
                     <div class="inner-box-cartas text-center">
                        <div class="image-box-cartas text-center">

                                <img src="{{ asset('storage/imagens/thumbnails/cartas/' . $i . '.png') }}" alt="">

                        </div>
                        <p>EMPRESA - {!! $i !!}</p>
                     </div>
                </div>
             @endfor
         </div>
      </div>
   </section>

@stop
