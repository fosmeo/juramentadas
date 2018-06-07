<div class="section-title text-center">
   <h3>Nossa Empresa
      <!-- <span>de Nossa Empresa</span> -->
   </h3>
   <p>Conheça Nossa Trajetória</p>
</div>
<!--Start about us area-->
<section class="service-tab-section section">
   <div class="outer-box clearfix">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!-- Nav tabs -->
               <div class="tabs">
                  <ul class="nav nav-tabs" role="tablist">
                  @foreach ($sobres as $sobre)
                     @if ($sobre -> id_sobre == 1)
                        <li role="presentation" class="active">
                     @else
                        <li role="presentation">
                     @endif
                        <a href="#{{ $sobre -> id_sobre }}"  data-toggle="tab">{{ $sobre -> sobre_titulo }}</a>
                     </li>
                  @endforeach
                  </ul>
               </div>
               <!--Start single tab content-->
               <div class="tab-content">

                  @foreach ($sobres as $sobre)

                     @if ($sobre -> id_sobre == 1)
                        <div class="service-box tab-pane fade in active row" id="{{ $sobre -> id_sobre }}">
                     @else
                        <div class="service-box tab-pane fade in" id="{{ $sobre -> id_sobre }}">
                     @endif

                     <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('storage/imagens/img_sobre/'.$sobre -> sobre_imagem) }}"  alt="{{ $sobre -> sobre_imagem }}">
                     </div>

                     <div class="col-md-6">
                        <div class="contents">
                           <div class="section-title">
                              <h3>{{ $sobre -> sobre_titulo }}</h3>
                           </div>
                           <div class="text">
                              <p>{!! nl2br($sobre -> sobre_texto) !!}</p>
                              </div>
                           {{-- <ul class="content-list">
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                           </ul> --}}
                           <a href="#" class="btn btn-style-one">Read more</a>
                        </div>
                     </div>
                  </div>
               @endforeach

               </div>
            </div>

         </div>
      </div>
   </div>
</section>
