<div class="container">
   <div class="row" >
      <div class="col-sm-12 col-xs-12">
         <div class="image-content">
            <div class="section-title text-center">
               <h3>{{ $traduz_global['servicos_titulo1'] }}
                  <span>Juramentadas.com</span>
               </h3>
               <p>{{ $traduz_global['servicos_titulo2'] }}</p>
            </div>
            <br><br>
            <div class="row">
               @foreach ($servicos as $servico)
               <div class="col-sm-6">
                  <div class="item">
                     <h6><a href="{{ route('site.servicos',[\Session::get('lang') ,$servico -> textos_posicao]) }}">{{ $servico -> textos_titulo1 }}</a></h6>
                     <p>{{ $servico -> textos_subtitulo }}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
