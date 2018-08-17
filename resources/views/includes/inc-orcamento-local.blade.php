<div class="col-md-8 col-sm-12 col-xs-12">
   <div class="contact-area">
      <form enctype="multipart/form-data" class="default-form contact-form" action="{{ route('email.orcamento') }}" method="POST">
         {{csrf_field()}}
         <input name="_method" type="hidden" value="POST">
         <input type="text" name="stobait" class="form-control main" style="display:none">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="form-group">
                  <label class="radio-inline"><input type="radio" name="radiopfpj" class="radiopfpj" value="Pessoa Física" checked>Pessoa Física</label>
                  <label class="radio-inline"><input type="radio" name="radiopfpj" class="radiopfpj" value="Pessoa Jurídica">Pessoa Jurídica</label>
               </div>
            </div>
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
                  <input type="text" name="estado" class="form-control main" placeholder="{{ $traduz_global['local_form_estado'] }}" required>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="form-group">
                  <input type="text" name="telefone" class="form-control main" placeholder="{{ $traduz_global['local_form_tel'] }}" required>
               </div>
               <div class="form-group">
                  <input type="email" name="email" class="form-control main" placeholder="{{ $traduz_global['local_form_email'] }}" required>
               </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="form-group">
                  <textarea name="mensagem" rows="15" class="form-control main" placeholder="{{ $traduz_global['local_form_mensagem'] }}"></textarea>
               </div>
               <input type="file" name="arquivo_orcamento" style="padding:0px;margin-bottom:10px;padding-bottom:50px" />
               <button class="btn btn-style-one" type="submit">{{ $traduz_global['local_form_botao'] }}</button>

            </div>
         </div>
      </form>
   </div>
</div>
