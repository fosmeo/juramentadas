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

      <div id="main" class="row">
         <section class="feature-section section bg-gray">
            @yield('content_notification')
         </section>

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

      </div>

      <!--Scroll to top-->
      <div class="scroll-to-top scroll-to-target" data-target=".header-top">
         <span class="icon fa fa-angle-up"></span>
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
<script src="{{ asset('theme-assets/plugins/slick/slick.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/wow.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('theme-assets/js/script.js') }}"></script>

</html>
