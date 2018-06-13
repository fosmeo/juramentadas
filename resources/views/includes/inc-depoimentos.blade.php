 <div class="container">
     <div class="section-title text-center">
         <h3>{{ $traduz_global['depoimentos'] }}</h3>
     </div>
     <div class="testimonial-carousel">
        @foreach ($depoimentos as $depoimento)
         <div class="slide-item">
             <div class="inner-box text-center">
                 <div class="image-box">
                     <figure>
                         <img src="{{ asset('storage/imagens/img_depoimentos/'.$depoimento -> depoimentos_imagem) }}" alt="">
                     </figure>
                 </div>
                 <p>{!! nl2br($depoimento -> depoimentos_texto) !!}</p>
             </div>
         </div>
        @endforeach
     </div>
 </div>
