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

            <div class="row" style="margin-top:70px;border:1px solid #d2d4d5">
            </div>

            <div class="row">
                <div class="col-md-2" style="padding:10px; margin-right:0px;border:1px solid #d2d4d5">
                    @include('includes.sidebar')
                </div>
                <div class="col-md-10" style="padding:10px; margin-left:0px;border:1px solid #d2d4d5">
                    @yield('content')
                </div>
            </div>

        </div>

    </body>
</html>
