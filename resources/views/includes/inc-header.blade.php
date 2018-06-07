<!--header top-->
<div class="header-top">

   <div class="container clearfix">

      <div class="top-left">
         <h6>{!! $headerTop !!}</h6>
      </div>

      <div class="top-right">

         <ul class="social-links">
            <li class="dropdown" style="margin-right:10px">
               <a class="dropdown-toggle" type="button" data-toggle="dropdown">Escolha o Idioma
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{!! url('site/pt') !!}">Portugues</a></li>
                     <li><a class="dropdown-item" href="{!! url('site/en') !!}">English</a></li>
                     <li><a class="dropdown-item" href="{!! url('site/es') !!}">Español</a></li>
                     <li><a class="dropdown-item" href="{!! url('site/it') !!}">Italiano</a></li>
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
            <a href="index.html">
               <img src="images/logo.png" alt="" width="130">
            </a>
         </figure>
      </div>
      <div class="right-side">
         <ul class="contact-info">
            <li class="item">
               <div class="icon-box">
                  <i class="fa fa-envelope-o"></i>
               </div>
               <strong>Email</strong>
               <br>
               <a href="#">
                  <span>{!! $headerUpper[0] !!}</span>
               </a>
            </li>
            <li class="item">
               <div class="icon-box">
                  <i class="fa fa-phone"></i>
               </div>
               <strong>Ligue Agora</strong>
               <br>
               <span>{!! $headerUpper[1] !!}</span>
            </li>
         </ul>
         <div class="link-btn">
            <a href="#" class="btn-style-one"><span>{!! $headerUpper[2] !!}</span></a>
         </div>
      </div>
   </div>
</section>
<!--Header Upper-->
