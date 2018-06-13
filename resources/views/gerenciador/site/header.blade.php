@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="form-group marginsV col-md-12">
      @foreach ($headers as $header)
         <form class="row" method="POST" action="{{route('header.atualizar', $header -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>HEADER TOP:</label>
            <textarea name = "header_top" rows="2" class="form-control">
               {{ $header -> header_top }}
            </textarea>
            <label>HEADER UPPER Email:</label>
            <textarea name = "header_upper_email" rows="3" class="form-control">
               {{ $header -> header_upper_email }}
            </textarea>
            <label>HEADER UPPER Telefone:</label>
            <textarea name = "header_upper_tel" rows="3" class="form-control">
               {{ $header -> header_upper_tel }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach

   </div>
@stop
