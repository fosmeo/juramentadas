@extends('layouts.layout-dashboard')

@section('content')

   @if (!empty($errors -> all()))
      <div class="alert alert-danger">{{ $errors -> first() }}</div>
   @elseif (Session::has('flashmsg'))
      <div class="alert alert-success">{{ Session::get('flashmsg') }}</div>
   @endif

   <div class="form-group marginsV col-md-12">

      @foreach ($inicials as $inicial)

         @if(\Session::get('lang')=='pt')
            <form method="POST" action="{{ route('inicial_pt.atualiza', $inicial -> id) }}">
         @elseif(\Session::get('lang')=='en')
            <form method="POST" action="{{ route('inicial_en.atualiza', $inicial -> id) }}">
         @elseif(\Session::get('lang')=='es')
            <form method="POST" action="{{ route('inicial_es.atualiza', $inicial -> id) }}">
         @elseif(\Session::get('lang')=='it')
            <form method="POST" action="{{ route('inicial_it.atualiza', $inicial -> id) }}">
         @endif
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">

               <label>Titulo Página Principal</label>
               <input type="text" name="textos_titulo1" value="{{ $inicial -> textos_titulo1 }}" class="form-control">
               <br>

               <label>Subtitulo Página Principal</label>
               <input type="text" name="textos_subtitulo" value="{{ $inicial -> textos_subtitulo }}" class="form-control">
               <br>

               <label>Titulo Página Conseguinte</label>
               <input type="text" name="textos_titulo2" value="{{ $inicial -> textos_titulo2 }}" class="form-control">
               <br>

               <label>Texto Página Conseguinte</label>
               <textarea rows="5" name="textos_texto" class="form-control">
                  {{ $inicial -> textos_texto }}
               </textarea>
               <button type="submit" class="col-md-12 btn btn-primary">Gravar</button>
            </form>

         <br>
         <hr>
         <br>

      @endforeach

   </div>
@stop
