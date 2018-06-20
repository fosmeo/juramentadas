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
               <a class="dropdown-toggle" type="button" data-toggle="dropdown">
                  {{ $traduz_global['escolha_idioma'] }}
                  <span class="caret"></span>
               </a>
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
               <img src="{{ asset('storage/imagens/misc/logo-juramentadas.png') }}" alt="">
            </a>
         </figure>
      </div>
      <div class="right-side">
         <ul class="contact-info">
            <li class="item">
               <div class="icon-box">
                  <i class="fa fa-phone"></i>
               </div>
               <strong>{{ $traduz_global['ligue_agora']}}</strong>
               <br>
                  <span>{!! $headers['header_upper_tel'] !!}</span>
            </li>
            <li class="item">
               <div class="icon-box">
                  <i class="fa fa-envelope-o"></i>
               </div>
               <strong>{{ $traduz_global['email'] }}</strong>
               <br>
               <a href="#">
                  <span>{!! $headers['header_upper_email'] !!}</span>
               </a>
            </li>
         </ul>
         <div class="link-btn">
            <a href="#" class="btn-style-one">
               <span>{{ $traduz_global['solicite_orcamento'] }}</span>
            </a>
         </div>
      </div>
   </div>
</section>
<!--Header Upper-->
