@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">
      @foreach ($navbars as $navbar)
         <form class="row" method="POST" action="{{route('navbar.atualizar', $navbar -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>MENU:</label>
            <textarea name = "itens" rows="10" class="form-control">
               {{ $navbar -> itens }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach

   </div>
@stop
