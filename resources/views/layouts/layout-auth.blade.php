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

      <header id="main" class="row headers">
         @include('includes.gerenciador.inc-navbar-gerenciador')
      </header>

      <div id="main" class="row">
         @yield('content')
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

<script src="{{ asset('theme-assets/plugins/wow.js') }}"></script>
<script src="{{ asset('theme-assets/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('theme-assets/js/script.js') }}"></script>

</html>
