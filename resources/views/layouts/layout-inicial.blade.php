<!DOCTYPE HTML>
<html>

<head>
   @include('includes.inc-head')
</head>

<body>

   <div class="container-fluid">

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
         @yield('content')
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
