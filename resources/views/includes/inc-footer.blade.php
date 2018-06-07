<!--footer-main-->
<div class="footer-top">
   <div class="container">
      <div class="row">

         <div class="col-md-3 col-sm-5 col-xs-11">
            {{-- <h6>Services</h6> --}}
            <ul class="menu-link">

               <li>
                  <a href="{!! route('welcome') !!}"><i class="fa fa-angle-right" aria-hidden="true"></i>{!! $menu[0] !!}</a>
               </li>
               <li>
                  <a href="{!! route('site.idiomas', session() -> get('lang')) !!}"><i class="fa fa-angle-right" aria-hidden="true"></i>{!! $menu[1] !!}</a>
               </li>
               <li>
                  <a href="{!! route('site.parceiros', session() -> get('lang')) !!}"><i class="fa fa-angle-right" aria-hidden="true"></i>{!! $menu[2] !!}</a>
               </li>
               <li>
                  <a href="{!! route('site.cartas', session() -> get('lang')) !!}"><i class="fa fa-angle-right" aria-hidden="true"></i>{!! $menu[4] !!}</a>
               </li>
               <li>
                  <a href="{!! route('site.localizacao', session() -> get('lang')) !!}"><i class="fa fa-angle-right" aria-hidden="true"></i>{!! $menu[3] !!}</a>
               </li>
            </ul>
         </div>

         <div class="col-md-3 col-sm-5 col-xs-11">
            <div class="about-widget">
               <div class="footer-logo">
                  <figure>
                     <a href="index.html">
                        <img src="images/logo-2.png" alt="">
                     </a>
                  </figure>
               </div>

               <ul class="location-link">
                  <li class="item">
                     <i class="fa fa-map-marker"></i>
                     <p>{!! nl2br($footers[0]['footer_col2']) !!}</p>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-3 col-sm-5 col-xs-11">
            <div class="about-widget">
               <div class="footer-logo">
                  <figure>
                     <a href="index.html">
                        <img src="images/logo-2.png" alt="">
                     </a>
                  </figure>
               </div>

               <ul class="location-link">
                  <li class="item">
                     <i class="fa fa-whatsapp"></i>
                     <p>{!! nl2br($footers[0]['footer_col3']) !!}</p>
                  </li>
               </ul>
            </div>
         </div>

         <div class="col-md-3 col-sm-5 col-xs-11">
            <div class="about-widget">
               <div class="footer-logo">
                  <figure>
                     <a href="index.html">
                        <img src="images/logo-2.png" alt="">
                     </a>
                  </figure>
               </div>

               <ul class="location-link">
                  <li class="item">
                     <i class="fa fas fa-at"></i>
                     <p>{!! nl2br($footers[0]['footer_col4']) !!}</p>
                  </li>
               </ul>
               <ul class="list-inline social-icons text-center">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               </ul>
            </div>
         </div>

      </div>
   </div>
</div>

<div class="footer-bottom">
   <div class="container clearfix">
      <div class="copyright-text">
         <p>&copy; Copyright 2018. All Rights Reserved by
            <a href="index.html">juramentadas.com</a>
         </p>
      </div>
   </div>
</div>

               <!--End footer-main-->
