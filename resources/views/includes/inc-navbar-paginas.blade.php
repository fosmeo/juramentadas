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
            <a href="{!! route('welcome') !!}">{!! $menu[0] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.sobre', session() -> get('lang')) !!}">{!! $menu[1] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.servicos', session() -> get('lang')) !!}">{!! $menu[2] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.idiomas', session() -> get('lang')) !!}">{!! $menu[3] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.quemsomos', session() -> get('lang')) !!}">{!! $menu[4] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.parceiros', session() -> get('lang')) !!}">{!! $menu[5] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.cartas', session() -> get('lang')) !!}">{!! $menu[6] !!}</a>
         </li>
         <li>
            <a href="{!! route('site.localizacao', session() -> get('lang')) !!}">{!! $menu[7] !!}</a>
         </li>
      </ul>
   </div>
   <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
