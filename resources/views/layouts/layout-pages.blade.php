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

      {{-- <header id="main" class="row headers">
         @include('includes.inc-slider')
      </header> --}}

      <div id="main" class="row">
         <section class="feature-section section bg-gray">
            @yield('content_single_pages')
         </section>

         <div id="section-height">

            <!-- ORCAMENTOS AND FAQ Section -->
            @if (\Session::get('area') !== 'local')
               <section class="appoinment-section section bg-gray">
                  <div class="container">
                     <div class="row">
                           @include('includes.inc-FAQ')
                           @include('includes.inc-orcamento')
                     </div>
                  </div>
               </section>
            @endif
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

{{-- <script src="{{ asset('theme-assets/plugins/validate.js') }}"></script> --}}
{{-- <script src="{{ asset('theme-assets/plugins/timePicker.js') }}"></script> --}}
<script src="{{ asset('theme-assets/plugins/wow.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('theme-assets/js/script.js') }}"></script>

</html>
