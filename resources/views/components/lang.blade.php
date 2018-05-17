@if(\Session::get('languser')=='pt')
   <li style="background-color:#f8c300"><a style="color:#4ca143"><span class="edicao-idioma">EDITANDO em PORTUGUÊS</span></a></li>
@elseif(\Session::get('languser')=='en')
   <li style="background-color:#23407A"><a style="color:#ffffff"><span class="edicao-idioma">EDITANDO em INGLÊS</span></a></li>
@elseif(\Session::get('languser')=='es')
   <li style="background-color:#cd1b2c"><a style="color:#f8c300"><span class="edicao-idioma">EDITANDO em ESPANHOL</span></a></li>
@elseif(\Session::get('languser')=='it')
   <li style="background-color:#4ca143"><a style="color:#fd2712"><span class="edicao-idioma">EDITANDO em ITALIANO</span></a></li>
@endif
