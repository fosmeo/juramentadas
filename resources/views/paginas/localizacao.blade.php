@extends('layouts.layout-pages')

@section('content_single_pages')
   <section class="map">
       <!-- Google Map -->
       <div id="map"></div>
   </section>

   <section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">

           <div class="section-title text-center">
             <h3>{{ $locals -> localizacao_titulo }}</h3>
           </div>
            <br><br>
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>{{ $traduz_global['local_texto_local'] }}</h3>
                            <p>{!! nl2br($locals -> localizacao_col1) !!}</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        {{-- <i class="fa fa-phone"></i> --}}
                        <i class="fa fa-whatsapp"></i>
                        <div class="media-body">
                            <h3>{{ $traduz_global['local_texto_tel'] }}</h3>
                            <p>{!! nl2br($locals -> localizacao_col2) !!}</p>
                            <p>{!! nl2br($locals -> localizacao_col4) !!}</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>{{ $traduz_global['email'] }}</h3>
                            <p>{!! nl2br($locals -> localizacao_col3) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="#" class="default-form contact-form">

                       <div class="form-group">
                          <select name="subject">
                             <option>Departments</option>
                             <option>Diagnostic</option>
                             <option>Psychological</option>
                          </select>
                       </div>

                        <!-- name -->
                        <div class="col-md-12">
                            <input type="text" name="nome" class="form-control main" placeholder="{{ $traduz_global['local_form_nome'] }}" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="cidade" class="form-control main" placeholder="{{ $traduz_global['local_form_cidade'] }}" required>
                        </div>
                        {{-- <div class="col-md-12">
                            <select name="estado" class="">
                  				<option value="Acre">Acre (AC)</option>
                  				<option value="Alagoas">Alagoas (AL)</option>
                  				<option value="Amapá">Amapá (AP)</option>
                  				<option value="Amazonas">Amazonas (AM)</option>
                  				<option value="Bahia">Bahia (BA)</option>
                  				<option value="Ceará">Ceará (CE)</option>
                  				<option value="Distrito Federal">Distrito Federal (DF)</option>
                  				<option value="Espírito Santo">Espírito Santo (ES)</option>
                  				<option value="Goiás">Goiás (GO)</option>
                  				<option value="Maranhão">Maranhão (MA)</option>
                  				<option value="Mato Grosso">Mato Grosso (MT)</option>
                  				<option value="Mato Grosso do Sul">Mato Grosso do Sul (MS)</option>
                  				<option value="Minas Gerais">Minas Gerais (MG)</option>
                  				<option value="Pará">Pará (PA)</option>
                  				<option value="Paraíba">Paraíba (PB)</option>
                  				<option value="Paraná">Paraná (PR)</option>
                  				<option value="Pernanmbuco">Pernambuco (PE)</option>
                  				<option value="Piauí">Piauí (PI)</option>
                  				<option value="Rio de Janeiro">Rio de Janeiro (RJ)</option>
                  				<option value="Rio Grande do Norte">Rio Grande do Norte (RN)</option>
                  				<option value="Rio Grande do Sul">Rio Grande do Sul (RS)</option>
                  				<option value="Rondônia">Rondônia (RO)</option>
                  				<option value="Roraima">Roraima (RR)</option>
                  				<option value="Santa Catarina">Santa Catarina (SC)</option>
                  				<option value="São Paulo">São Paulo (SP)</option>
                  				<option value="Sergipe">Sergipe (SE)</option>
                  				<option value="Tocantins">Tocantins (TO)</option>
                  			</select>
                        </div> --}}

                        <div class="col-md-6">
                            <input type="text" name="estado" class="form-control main" placeholder="{{ $traduz_global['local_form_estado'] }}" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-6">
                            <input type="text" name="telefone" class="form-control main" placeholder="{{ $traduz_global['local_form_tel'] }}" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control main" placeholder="{{ $traduz_global['local_form_email'] }}" required>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea name="mensagem" rows="15" class="form-control main" placeholder="{{ $traduz_global['local_form_mensagem'] }}"></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit">{{ $traduz_global['local_form_botao'] }}</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
   </section>

@stop
