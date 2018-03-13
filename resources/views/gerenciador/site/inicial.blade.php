@extends('layouts.layout-dashboard')

@section('content')
   <div class="form-group marginsV col-md-12">

      @foreach ($inicials as $inicial)

         <form>
            <label>Titulo Página Principal</label>
            <input type="text" name="" value="{{ $inicial -> textos_titulo1 }}" class="form-control">
            <br>

            <label>Subtitulo Página Principal</label>
            <input type="text" name="" value="{{ $inicial -> textos_subtitulo }}" class="form-control">
            <br>

            <label>Titulo Página Conseguinte</label>
            <input type="text" name="" value="{{ $inicial -> textos_titulo2 }}" class="form-control">
            <br>

            <label>Texto</label>
            <textarea rows="5" name="" class="form-control">
               {{ $inicial -> textos_texto }}
            </textarea>
         </form>

         <br>
         <hr>
         <br>

      @endforeach

   </div>
@stop
