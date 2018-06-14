<div class="col-md-8 col-sm-12 col-xs-12">
   <div class="contact-area">
      <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="form-group">
                  <input type="text" name="nome" class="form-control main" placeholder="{{ $traduz_global['local_form_nome'] }}" required>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="form-group">
                  <input type="text" name="cidade" class="form-control main" placeholder="{{ $traduz_global['local_form_cidade'] }}" required>
               </div>
               <div class="form-group">
                  <input type="text" name="telefone" class="form-control main" placeholder="{{ $traduz_global['local_form_tel'] }}" required>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="form-group">
                  <input type="text" name="estado" class="form-control main" placeholder="{{ $traduz_global['local_form_estado'] }}" required>
               </div>
               <div class="form-group">
                  <input type="email" name="email" class="form-control main" placeholder="{{ $traduz_global['local_form_email'] }}" required>
               </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="form-group">
                  <textarea name="mensagem" rows="15" class="form-control main" placeholder="{{ $traduz_global['local_form_mensagem'] }}"></textarea>
               </div>
               <div class="form-group text-center">
                  <button class="btn btn-style-one" type="submit">{{ $traduz_global['local_form_botao'] }}</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
