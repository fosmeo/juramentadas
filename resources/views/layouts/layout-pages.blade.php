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


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCezKKIH3Pzly1Naj7_3i5BcfzdQl2j3JA&callback=initMap"></script>
<script>
   var labels = 'J';
   var labelIndex = 0;

   function initMap() {
      var myLatLng = {lat: -23.5609349, lng: -46.6562577};
         var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 18,
         center: myLatLng,
         mapTypeId: 'hybrid'

      });
      var marker = new google.maps.Marker({
         position: myLatLng,
         label: labels[labelIndex++ % labels.length],
         map: map,
         title: 'Juramentadas.com'
      });
   }
</script>

</html>
