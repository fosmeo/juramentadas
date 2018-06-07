@extends('layouts.layout-dashboard')

@section('content_gerenciador')

   <div class="form-group marginsV col-md-12">

      @foreach ($inicials as $inicial)

         @if(\Session::get('languser')=='pt')
            <form method="POST" action="{{ route('inicial_pt.atualizar', $inicial -> id) }}">
         @elseif(\Session::get('languser')=='en')
            <form method="POST" action="{{ route('inicial_en.atualizar', $inicial -> id) }}">
         @elseif(\Session::get('languser')=='es')
            <form method="POST" action="{{ route('inicial_es.atualizar', $inicial -> id) }}">
         @elseif(\Session::get('languser')=='it')
            <form method="POST" action="{{ route('inicial_it.atualizar', $inicial -> id) }}">
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
               <textarea rows="8" name="textos_texto" class="form-control">
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
