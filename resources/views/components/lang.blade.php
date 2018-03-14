@if(\Session::get('lang')=='pt')
   <h5 class="">EDIÇÃO em PORTUGUÊS</h5>
@elseif(\Session::get('lang')=='en')
   <h5 class="">EDIÇÃO em INGLÊS</h5>
@elseif(\Session::get('lang')=='es')
   <h5 class="">EDIÇÃO em ESPANHOL</h5>
@elseif(\Session::get('lang')=='it')
   <h5 class="">EDIÇÃO em ITALIANO</h5>
@endif
