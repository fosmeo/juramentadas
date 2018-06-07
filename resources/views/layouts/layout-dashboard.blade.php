<!DOCTYPE HTML>
<html>
<head>
   @include('includes.inc-head')

<style>
   li a{
      color:black !important;
   }
</style>

</head>
<body>
   <div class="container-fluid">

      <div class="row">
         @include('includes.gerenciador.inc-navbar-gerenciador')
      </div>
      <div class="row text-center">
         @include('includes.gerenciador.inc-alerts')
      </div>

      <div class="row">
         <div class="col-md-2" style="padding:10px; margin-right:0px;border:1px solid #d2d4d5">
            @include('includes.gerenciador.inc-sidebar-gerenciador')
         </div>
         <div class="col-md-10" style="padding:10px; margin-left:0px;border:1px solid #d2d4d5">
            @yield('content_gerenciador')
         </div>
      </div>

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
