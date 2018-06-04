@if (!empty($errors -> all()))
    <div class="alert alert-danger">{{ $errors -> first() }}</div>
@elseif (\Session::has('flashmsg'))
    <div class="alert alert-success">
       {{ \Session::get('flashmsg') }}
       {{ \Session::forget('flashmsg')}}
    </div>
@endif
