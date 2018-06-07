@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="form-group marginsV col-md-12">
      @foreach ($navbars as $navbar)
         <form class="row" method="POST" action="{{route('navbar.atualizar', $navbar -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>MENU: (USAR PONTO E VÍRGULA PARA DELIMITAR O MENU)</label>
            <textarea name = "navbar_itens" rows="10" class="form-control">
               {{ $navbar -> navbar_itens }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach

   </div>
@stop
