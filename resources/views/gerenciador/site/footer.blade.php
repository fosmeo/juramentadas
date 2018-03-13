@extends('layouts.layout-dashboard')

@section('content')
   <div class="container-fluid">
      <form>
         @foreach ($footers as $footer)
            <div class="col">
               <textarea rows="5" class="form-control">
                  {{ $footer -> col1 }}
               </textarea>
            </div>
            <div class="col">
               <textarea rows="5" class="form-control">
                  {{ $footer -> col2 }}
               </textarea>
            </div>
            <div class="col">
               <textarea rows="5" class="form-control">
                  {{ $footer -> col3 }}
               </textarea>
            </div>
            <div class="col">
               <textarea rows="5" class="form-control">
                  {{ $footer -> col4 }}
               </textarea>
            </div>
         @endforeach
      </form>
   </div>
@stop
