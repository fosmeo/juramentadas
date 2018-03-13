@extends('layouts.layout-dashboard')

@section('content')
   <div class="form-group marginsV col-md-12">
     <form>
        @foreach ($idiomas as $idioma)
           <label>IDIOMAS:</label>
           <textarea rows="20" class="form-control">
              {{ $idioma -> col1 }}
           </textarea>
        @endforeach
     </form>
  </div>
@stop
