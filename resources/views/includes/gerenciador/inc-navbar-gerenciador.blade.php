<nav class="navbar navbar-default">
   <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
         aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
   </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li>
            <a href="{!! route('welcome') !!}">Início</a>
         </li>

         <li class="dropdown" style="margin-right:10px">
            <a class="dropdown-toggle" type="button" data-toggle="dropdown">Mudar Idioma
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{!! url('gerenciador/pt') !!}">Portugues</a></li>
                  <li><a class="dropdown-item" href="{!! url('gerenciador/en') !!}">English</a></li>
                  <li><a class="dropdown-item" href="{!! url('gerenciador/es') !!}">Español</a></li>
                  <li><a class="dropdown-item" href="{!! url('gerenciador/it') !!}">Italiano</a></li>
               </ul>
         </li>

         @component('components.lang')@endcomponent

         <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())
               <li><a href="{{ route('login') }}">Login</a></li>
            @else

            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

               <ul class="dropdown-menu">
                  <li>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  </li>

                  <li>
                     <a href="{{ route('gerenciador.setidioma', \Session::get('lang') ) }}">Gerenciador</a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>

                  <li><a href="{{ route('register') }}">USER Register</a></li>

               </ul>
            </li>
            <li>
               LANGUSER: {{ \Session::get('languser') }}
               LANG: {{ \Session::get('lang') }}
            </li>
         @endif

      </ul>
      </ul>
   </div>
   <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
