@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">
      @foreach ($idiomas as $idioma)
         <form class="row" method="POST" action="{{route('idiomas.atualizar', $idioma -> id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label>IDIOMAS:</label>
            <textarea name = "idiomas_texto" rows="20" class="form-control">
               {{ $idioma -> idiomas_texto }}
            </textarea>
            <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
         </form>
      @endforeach
   </div>
@stop
