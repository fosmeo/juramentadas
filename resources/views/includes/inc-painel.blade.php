<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="cta-block">
            <div class="item painel-esq">
               <i class="fa fa-phone"></i>
               <h2>{{ $traduz_global['painel_texto1'] }}</h2>
            	<a href="https://api.whatsapp.com/send?phone=5511999551260" target="_blank"><span>(11)</span> 99955-1260</a>
               <p>Nós ligamos para você</p>
               <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                           <input type="text" name="nome" class="form-control main" placeholder="Nome" required>
                           <input type="tel" name="telefone" class="form-control main" placeholder="Telefone" required>

                        </div>
                        <button type="submit" class="col-md-12 btn-main" \>Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="item painel-mid">
               <i class="fa fa-hourglass"></i>
               <h2>{{ $traduz_global['painel_texto2'] }}</h2>
                  <br>
                  <a class="col-md-12 btn-main text-center" href="{{ Request::url() }}/servicos/pt/10" class="btn-main">Saiba Mais</a>
            </div>
            <div class="item painel-dir">
               <i class="fa fa-flag-o"></i>
               <h2>{{ htmlspecialchars($traduz_global['painel_texto3']) }}</h2>
               <a class="col-md-12 btn-main text-center" href="{{ Request::url() }}/cidadania/pt" class="btn-main">Saiba Mais</a>
            </div>
         </div>
      </div>
   </div>
</div>
