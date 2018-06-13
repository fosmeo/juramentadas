<!--header top-->
<div class="header-top">

   <div class="container clearfix">
      {{-- <pre>
         {{ var_dump(session() -> all()) }}
      </pre> --}}
      <div class="top-left">
         <h6>{!! $headers -> header_top !!}</h6>
      </div>

      <div class="top-right">

         <ul class="social-links">
            <li class="dropdown" style="margin-right:10px">
               <a class="dropdown-toggle" type="button" data-toggle="dropdown">Escolha o Idioma
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{!! route('site.setidioma', 'pt') !!}">Portugues</a></li>
                     <li><a class="dropdown-item" href="{!! route('site.setidioma', 'en') !!}">English</a></li>
                     <li><a class="dropdown-item" href="{!! route('site.setidioma', 'es') !!}">Español</a></li>
                     <li><a class="dropdown-item" href="{!! route('site.setidioma', 'it') !!}">Italiano</a></li>
                  </ul>
            </li>
            <li>
               <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
               </a>
            </li>
            <li>
               <a href="#">
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
   <div class="container clearfix">
      <div class="logo">
         <figure>
            <a href="{{ url('/') }}">
               <img src="{{ asset('storage/imagens/bg/logo-juramentadas.png') }}" alt="">
            </a>
         </figure>
      </div>
      <div class="right-side">
         <ul class="contact-info">
            <li class="item">
               <div class="icon-box">
                  <i class="fa fa-phone"></i>
               </div>
               @if (\Session::get('lang') == 'pt')
                  <strong>Ligue Agora</strong>
               @elseif (\Session::get('lang') == 'en')
                  <strong>Call Now</strong>
               @elseif (\Session::get('lang') == 'es')
                  <strong>Llame Ahora</strong>
               @elseif (\Session::get('lang') == 'it')
                  <strong>Chiama Ora</strong>
               @endif
               <br>
                  <span>{!! $headers['header_upper_tel'] !!}</span>
            </li>
            <li class="item">
               <div class="icon-box">
                  <i class="fa fa-envelope-o"></i>
               </div>
               <strong>Email</strong>
               <br>
               <a href="#">
                  <span>{!! $headers['header_upper_email'] !!}</span>
               </a>
            </li>
         </ul>
         <div class="link-btn">
            <a href="#" class="btn-style-one">
               @if (\Session::get('lang') == 'pt')
                  <span>Solicite um Orçamento</span>
               @elseif (\Session::get('lang') == 'en')
                  <span>Get a Quote</span>
               @elseif (\Session::get('lang') == 'es')
                  <span>Solicitar presupuesto</span>
               @elseif (\Session::get('lang') == 'it')
                  <span>Richedete ora um Preventivo</span>
               @endif
            </a>
         </div>
      </div>
   </div>
</section>
<!--Header Upper-->
