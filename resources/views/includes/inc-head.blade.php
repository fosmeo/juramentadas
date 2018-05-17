<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Juramentadas.com</title>

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- Slick Carousel -->
   <link rel="stylesheet" href="{{ asset('theme-assets/plugins/slick/slick.css ') }}">
   <link rel="stylesheet" href="{{ asset('theme-assets/plugins/slick/slick-theme.css ') }}">
   <!-- FancyBox -->
   <link rel="stylesheet" href="{{ asset('theme-assets/plugins/fancybox/jquery.fancybox.min.css ') }}">

   <!-- Stylesheets -->
   <link href="{{ asset('theme-assets/css/style.css') }}" rel="stylesheet">

   {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> --}}

   {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

   <!--Favicon-->
   <link rel="shortcut icon" href="{{ asset('theme-assets/images/favicon.ico ') }}" type="image/x-icon">
   <link rel="icon" href="{{ asset('theme-assets/images/favicon.ico ') }}" type="image/x-icon">

</head>
