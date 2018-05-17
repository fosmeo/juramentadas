@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">
      @foreach ($headers as $header)
         <form class="row" method="POST" action="{{route('header.atualizar', $header -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>HEADER TOP:</label>
            <textarea name = "header_top" rows="2" class="form-control">
               {{ $header -> header_top }}
            </textarea>
            <label>HEADER UPPER:</label>
            <textarea name = "header_upper" rows="3" class="form-control">
               {{ $header -> header_upper }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach

   </div>
@stop
