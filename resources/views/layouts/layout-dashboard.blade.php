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
                <div class="col" style="padding:20px; margin-left:30px;margin-right:30px;border:1px solid #d2d4d5">
                    @if (session() -> get('idioma') == 'pt')
                        <h4 class="text-center">Editando no Idioma "PORTUGUES"</h4>
                    @elseif (session() -> get('idioma') == 'en')
                        <h4 class="text-center">Editando no Idioma "ENGLISH"</h4>
                    @elseif (session() -> get('idioma') == 'es')
                        <h4 class="text-center">Editando no Idioma "ESPAÑOL"</h4>
                    @elseif (session() -> get('idioma') == 'it')
                        <h4 class="text-center">Editando no Idioma "ITALIANO"</h4>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-3" style="padding:20px; margin-left:30px;border:1px solid #d2d4d5">
                    @include('includes.sidebar')
                </div>
                <div class="col" style="padding:20px; margin-right:30px;border:1px solid #d2d4d5">
                    @yield('content')
                </div>
            </div>

        </div>

    </body>
</html>
