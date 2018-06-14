@extends('layouts.layout-pages')

@section('content_single_pages')
   <section class="map">
       <!-- Google Map -->
       <div id="map"></div>
   </section>

   <section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">

           <div class="section-title text-center">
             <h3>{{ $locals -> localizacao_titulo }}</h3>
             <p>{{ $traduz_global['local_titulo2'] }}</p>
           </div>
            <br><br>
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>{{ $traduz_global['local_texto_local'] }}</h3>
                            <p>{!! nl2br($locals -> localizacao_col1) !!}</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        {{-- <i class="fa fa-phone"></i> --}}
                        <i class="fa fa-whatsapp"></i>
                        <div class="media-body">
                            <h3>{{ $traduz_global['local_texto_tel'] }}</h3>
                            <p>{!! nl2br($locals -> localizacao_col2) !!}</p>
                            <p>{!! nl2br($locals -> localizacao_col4) !!}</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>{{ $traduz_global['email'] }}</h3>
                            <p>{!! nl2br($locals -> localizacao_col3) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            @include('includes.inc-orcamento-local')

        </div>
    </div>
    <!-- container end -->
   </section>

@stop
