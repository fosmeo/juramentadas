@extends('layouts.layout-notifications')

@section('content_notification')
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title text-center">
               <div style="background-color:#132646; padding:10px">
                  <img src="{{ asset('storage/imagens/misc/logo-juramentadas.png') }}" alt="logo-juramentadas">
               </div>
               @if (\Session::has('flashmsg'))
                   <div class="alert alert-success">
                      <h1>{{ nl2br(\Session::get('flashmsg')) }}</h1>
                      {{ \Session::forget('flashmsg') }}
                   </div>
               @endif
            </div>
      </div>
   </div>
@stop
