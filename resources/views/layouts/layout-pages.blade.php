<!DOCTYPE HTML>
<html>

<head>
   @include('includes.head')
</head>

<body>

   <div class="container-fluid">

      <header id="main" class="row headers">
         @include('includes.header')
      </header>

      <div class="row">
         @include('includes.navbar')
      </div>

      <header id="main" class="row headers">
         @include('includes.slider')
      </header>

      <div id="main" class="row">
         @yield('content')
      </div>

      {{-- <footer class="row">
         @include('includes.footer')
      </footer> --}}

   </div>

</body>
</html>
