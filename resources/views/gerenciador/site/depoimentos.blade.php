@extends('layouts.layout-dashboard')

@section('content')
   <div class="form-group marginsV col-md-12">
      <form>
         @foreach ($depoimentos as $depoimento)
            <label>Depoimento {!! $depoimento -> textos_posicao !!}</label>
            <textarea rows="5" class="form-control">
               {{ $depoimento -> col1 }}
            </textarea>
            <br><hr><br>
         @endforeach
      </form>
   </div>
@stop
