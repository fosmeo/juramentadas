<div class="container">
   <div class="row">
      <div class="col-sm-12 col-xs-12">

         <div class="image-content">

            <div class="section-title text-center">
               <h3>Melhores Serviços
                  <span>de Nossa Empresa</span>
               </h3>
               <p>Confira os Serviços que Nossa Empresa Oferece pra Você</p>
            </div>

            <div class="row">

               @foreach ($servicos as $servico)
               <div class="col-sm-6">
                  <div class="item">
                     <div class="icon-box">
                        <figure>
                           <a href="#">
                              <img src="images/resource/1.png" alt="">
                              <i class="fa fa-bank" aria-hidden="true"></i>
                           </a>
                        </figure>
                     </div>
                     <h6>{{ $servico -> textos_titulo1 }}</h6>
                     <p>{{ $servico -> textos_subtitulo }}</p>
                  </div>
               </div>
               @endforeach

            </div>
         </div>
      </div>
   </div>
</div>
