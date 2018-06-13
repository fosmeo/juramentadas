@extends('layouts.layout-pages')

@section('content')

 <div class="container">
  <div class="section-title text-center">
      <h3></h3>
      <p></p>
  </div>
  <div class="row items-container clearfix">
      <div class="item">
          <div class="inner-box">
              <div class="img_holder">
                  <a href="service.html">
                      <img src="{{ asset('storage/imagens/img_clientes/') }}" alt="images" class="img-responsive">
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>
@stop
