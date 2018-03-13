@extends('layouts.layout-dashboard')

@section('content')
   <div class="form-group marginsV col-md-12">
      <form>
         @foreach ($sobres as $sobre)
            <label>Texto {!! $sobre -> texto_posicao !!}</label>
            <textarea rows="5" class="form-control">
               {{ $sobre -> col1 }}
            </textarea>
            <br><hr><br>
         @endforeach
      </form>
   </div>
@stop
