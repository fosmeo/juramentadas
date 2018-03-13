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
            <div class="row">
                <div class="col" style="padding:20px; margin-left:20px;margin-right:20px;border:1px solid #d2d4d5">
                    @if (session() -> get('lang') == 'pt')
                        <h4 class="text-center">Editando em "PORTUGUES"</h4>
                    @elseif (session() -> get('lang') == 'en')
                        <h4 class="text-center">Editando em "ENGLISH"</h4>
                    @elseif (session() -> get('lang') == 'es')
                        <h4 class="text-center">Editando em "ESPAÑOL"</h4>
                    @elseif (session() -> get('lang') == 'it')
                        <h4 class="text-center">Editando em "ITALIANO"</h4>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-3" style="padding:20px; margin-left:20px;border:1px solid #d2d4d5">
                    @include('includes.sidebar')
                </div>
                <div class="col" style="padding:20px; margin-right:20px;border:1px solid #d2d4d5">
                    @yield('content')
                </div>
            </div>

        </div>

    </body>
</html>
