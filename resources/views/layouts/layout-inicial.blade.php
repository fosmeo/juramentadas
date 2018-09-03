<!DOCTYPE HTML>
<html>

<head>
   @include('includes.inc-head')
</head>

<body>
   <div class="page-wrapper">

      <header id="main" class="row headers">
         @include('includes.inc-header')
      </header>

      <div class="row">
         @include('includes.inc-navbar-paginas')
      </div>

      <header id="main" class="row headers">
         @include('includes.inc-slider')
      </header>

      <div id="main" class="row">
         <!-- Painel Section -->
         <section class="cta">
            @include('includes.inc-painel')
         </section>

         <!-- SERVICOS Section -->
         <section class="feature-section section" style="background: url( {{ asset('storage/imagens/misc/imagem-predio.jpg') }}); background-attachment:fixed;">
            @include('includes.inc-servicos')
         </section>

         <!-- EMPRESA Section -->
         <section class="service-tab-section section">
            @include('includes.inc-sobre')
         </section>

         <!-- DEPOIMENTOS Section -->
         <section class="testimonial-section" style="background: url( {{ asset('storage/imagens/misc/banner-depoimentos.jpg') }}); background-attachment:fixed;">
            @include('includes.inc-depoimentos')
         </section>

         <!-- CIDADANIA Section -->
         {{-- <section class="feature-section section ">
            @include('includes.inc-cidadania')
         </section> --}}

         <!-- ORCAMENTOS AND FAQ Section -->
         <div id="section-height">

            <section class="appoinment-section section bg-gray" >
               <div class="container">
                  <div class="row">
                        @include('includes.inc-FAQ')
                        @include('includes.inc-orcamento')
                  </div>
               </div>
            </section>

            <!--Scroll to top-->
            <div class="scroll-to-top scroll-to-target" data-target=".header-top">
               <span class="icon fa fa-angle-up"></span>
            </div>

            <footer class="footer-main">
               @include('includes.inc-footer')
            </footer>
            
         </div>

      </div>

      <a href="#" id="topo"><img src="{{ asset('storage/imagens/misc/scroll-top.png') }}" alt=""></a>

   </div>

</body>

<script src="{{ asset('theme-assets/plugins/jquery.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('theme-assets/js/scrollTop.js') }}"></script>
<script src="{{ asset('theme-assets/js/scrollBottom.js') }}"></script>

<!-- Slick Slider -->
<script src="{{ asset('theme-assets/plugins/slick/slick.js') }}"></script>

<!-- FancyBox -->
{{-- <script src="{{ asset('theme-assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script> --}}

<!-- Google Map -->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('theme-assets/plugins/google-map/gmap.js') }}"></script> --}}

{{-- <script src="{{ asset('theme-assets/plugins/timePicker.js') }}"></script> --}}
{{-- <script src="{{ asset('theme-assets/plugins/validate.js') }}"></script> --}}
<script src="{{ asset('theme-assets/plugins/wow.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('theme-assets/js/script.js') }}"></script>

</html>
