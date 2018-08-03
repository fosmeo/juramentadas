@extends('layouts.layout-pages')

@section('content_single_pages')

   <div class="section-title text-center">
      <h3>{{ $traduz_global['cartas'] }}</h3>
   </div>
   <br>
   <section class="cartas-section" style="background: url( {{ asset('storage/imagens/misc/carta.jpg') }})">
      <div class="container">
         <div class="cartas-carousel">

             @for ($i=1; $i <=8; $i++)
                <div class="slide-item">
                     <div class="inner-box text-center">
                        @if ($i == 1)
                           <p class="font-cartas">EGIS</p>
                           @elseif ($i == 2)
                              <p class="font-cartas">Engebasa</p>
                           @elseif ($i == 3)
                              <p class="font-cartas">GTD Sistemas</p>
                           @elseif ($i == 4)
                              <p class="font-cartas">CGuedes</p>
                           @elseif ($i == 5)
                              <p class="font-cartas">Mattos Filho</p>
                           @elseif ($i == 6)
                              <p class="font-cartas">Pedro Calmon Filho</p>
                           @elseif ($i == 7)
                              <p class="font-cartas">Pan Marine</p>
                           @elseif ($i == 8)
                              <p class="font-cartas">UTC - Engenharia</p>
                        @endif
                        <div class="image-box-cartas text-center">
                           <a href="{{ asset('storage/cartas/' . $i . '.pdf') }}" target="_blank">
                                <img class="thumb-cartas" src="{{ asset('storage/imagens/thumbnails/cartas/' . $i . '.png') }}" alt="" >
                           </a>
                        </div>
                     </div>
                </div>
             @endfor

         </div>
      </div>
   </section>

@stop
