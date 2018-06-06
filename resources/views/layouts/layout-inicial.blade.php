<!DOCTYPE HTML>
<html>

<head>
   @include('includes.inc-head')
</head>

<body>

   <div class="container-fluid">

      <header id="main" class="row headers">
         LANG: {!! \Session::get('lang') !!}
         LANGUSER: {!! \Session::get('languser') !!}
         @include('includes.inc-header')
      </header>

      <div class="row">
         @include('includes.inc-navbar-paginas')
      </div>

      <header id="main" class="row headers">
         @include('includes.inc-slider')
      </header>

      <div id="main" class="row">
         <div class="page-wrapper">

            <!-- Painel Section -->
            <section class="cta">
            </section>
            <!-- SERVICOS Section -->
            <section class="feature-section section bg-gray">
            </section>
            <!-- EMPRESA Section -->
            <section class="service-tab-section section">
            </section>
            <!-- ORCAMENTOS AND FAQ Section -->
            <section class="appoinment-section section">
            </section>
            <!-- End Contact Section -->
            </div>
            <!--End pagewrapper-->
            <!--Scroll to top-->
            <div class="scroll-to-top scroll-to-target" data-target=".header-top">
               <span class="icon fa fa-angle-up"></span>
            </div>
         </div>

      <footer class="footer-main">
         @include('includes.inc-footer')
      </footer>

   </div>

</body>

<script src="{{ asset('theme-assets/plugins/jquery.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/bootstrap-select.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('theme-assets/plugins/slick/slick.min.js') }}"></script>
<!-- FancyBox -->
<script src="{{ asset('theme-assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('theme-assets/plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset('theme-assets/plugins/validate.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/wow.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/timePicker.js') }}"></script>
<script src="{{ asset('theme-assets/js/script.js') }}"></script>

</html>
