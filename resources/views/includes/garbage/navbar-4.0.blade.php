<div class='container-fluid'>
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Selecione o Idioma
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{!! url('gerenciador/site/pt') !!}">Portugues</a>
                  <a class="dropdown-item" href="{!! url('gerenciador/site/en') !!}">English</a>
                  <a class="dropdown-item" href="{!! url('gerenciador/site/es') !!}">Español</a>
                  <a class="dropdown-item" href="{!! url('gerenciador/site/it') !!}">Italiano</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item">
               @component('components.lang')@endcomponent
            </li>

         </ul>

         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>

         <!-- Authentication Links -->
         @if (Auth::guest())
            <li class="nav-item">
               <a href="{{ route('login') }}">Login</a>
            </li>
         @else

            <ul class="navbar-nav navbar-right">

               <li class="nav-item dropdown">

                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                     <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                     </a>

                     <a class="nav-link" href="{{ route('setidioma') }}">Gerenciador</a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                     </form>
                  </div>

               </li>

            @endif

         </ul>
      </div>
   </nav>
</div>
