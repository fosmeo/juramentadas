<!--=================================
=            Page Slider            =
==================================-->

<div class="hero-slider">
   <!-- Slider Item -->

   @foreach ($sliders as $slider)

   <div class="slider-item" style="background-image:url({{ asset('storage/imagens/img_sliders/'.$slider -> slider_imagem) }}">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <!-- Slide Content Start -->
               <div class="content style text-center">
                  <h2 class="text-white text-bold mb-2">{{ $slider -> slider_titulo }}</h2>
                  <p class="tag-text mb-5">{{ $slider -> slider_texto }}</p>
                     @if ($slider -> slider_link_botao != '')
                        <a href="{{ $slider -> slider_link_botao }}" class="btn btn-main btn-white" target="_blank">{{ $slider -> slider_botao}}</a>
                     @endif

                  </div>
                  <!-- Slide Content End -->
               </div>
            </div>
         </div>
      </div>

   @endforeach

</div>

   <!--====  End of Page Slider  ====-->
