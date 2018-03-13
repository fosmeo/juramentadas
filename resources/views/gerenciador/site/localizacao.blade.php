@extends('layouts.layout-dashboard')

@section('content')
   <div class="form-group marginsV col-md-12">
      <form>
         @foreach ($locales as $local)
            <textarea rows="20" class="form-control">
               {{ $local -> col1 }}
            </textarea>
         @endforeach
      </form>
   </div>
@stop
