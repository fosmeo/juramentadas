<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="cta-block">
            <div class="item painel-esq">
               <i class="fa fa-phone"></i>
               <h2>{{ $traduz_global['painel_texto1'] }}</h2>
            	<a href="https://api.whatsapp.com/send?phone=5511999551260" target="_blank"><span>(11)</span> 99955-1260</a>
               <p>Nós ligamos para você</p>
               <form class="default-form contact-form" method="POST" action="{{ route('email.whatsapp') }}">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                           {{csrf_field()}}
                           <input name="_method" type="hidden" value="POST">
                           <input type="text" name="nome" class="form-control main" placeholder="Nome" required>
                           <input type="tel" name="telefone" class="form-control main" placeholder="Telefone" required>
                           <input type="text" name="stobait" class="form-control main" style="display:none">
                        </div>
                        <button type="submit" class="col-md-12 btn-main" \>{{ $traduz_global['botao1'] }}</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="item painel-mid">
               <i class="fa fa-hourglass"></i>
               <h2>{{ $traduz_global['painel_texto2'] }}</h2>
                  <br>
                  <a class="col-md-12 btn-main text-center scroll-contato" href="#">{{ $traduz_global['botao2'] }}</a>
            </div>
            <div class="item painel-dir">
               <i class="fa fa-flag-o"></i>
               <h2>{{ htmlspecialchars($traduz_global['painel_texto3']) }}</h2>
               <a class="col-md-12 btn-main text-center" href="{{ Request::url() }}/cidadania/{{\Session::get('lang')}}" class="btn-main">{{ $traduz_global['botao3'] }}</a>
            </div>
         </div>
      </div>
   </div>
</div>
