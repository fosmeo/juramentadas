<!DOCTYPE HTML>
<html>

    <head>
        @include('includes.head')
    </head>

    <body>

        <div class="container-fluid">

            <div class="row">
                @include('includes.navbar')
            </div>

            <header class="row" style="padding:20px;border:1px solid">
                @include('includes.header')
            </header>

            <div id="main" class="row">
                @yield('content')
            </div>

            <footer class="row" style="padding:20px;border:1px solid">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>
