@extends('layouts.layout-inicial')

@section('content')

   <div class="page-wrapper">

      <section class="cta">
         <div class="container">
            <div class="row">
               <div class="col-md-12">

                  <h2>
                     {!! \Session::get('lang') !!}
                  </h2>
                  <div class="cta-block">
                     <div class="emmergency item">
                        <i class="fa fa-phone"></i>
                        <h2>WhatsApp</h2>
                        <a href="#">(11) 9995-51260</a>
                        <p></p>
                     </div>
                     <div class="top-doctor item">
                        <i class="fa fa-stethoscope"></i>
                        <h2>Atendimento 24h</h2>
                        <p>Apostilamento de Documentos em 24h</p>
                        <a href="#" class="btn btn-main">Read more</a>
                     </div>
                     <div class="working-time item">
                        <i class="fa fa-hourglass-o"></i>
                        <h2>Cidadania Italiana</h2>
                        <ul class="w-hours">
                           <li>Descontos Especiais em traduções para cidadania Italiana</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--about section-->
      <section class="feature-section section bg-gray">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-xs-12">
                  <div class="image-content">
                     <div class="section-title text-center">
                        <h3>Melhores Serviços
                           <span>de Nossa Empresa</span>
                        </h3>
                        <p>Confira os Serviços que Nossa Empresa Oferece pra Você</p>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="item">
                              <div class="icon-box">
                                 <figure>
                                    <a href="#">
                                       <img src="images/resource/1.png" alt="">
                                    </a>
                                 </figure>
                              </div>
                              <h6>Traduções</h6>
                              <p>Simples e Juramentads</p>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="item">
                              <div class="icon-box">
                                 <figure>
                                    <a href="#">
                                       <img src="images/resource/2.png" alt="">
                                    </a>
                                 </figure>
                              </div>
                              <h6>Traduções de Documentos Particulares</h6>
                              <p>Certidão de nascimento, passaportes, diplomas, comprovantes de renda etc...</p>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="item">
                              <div class="icon-box">
                                 <figure>
                                    <a href="#">
                                       <img src="images/resource/3.png" alt="">
                                    </a>
                                 </figure>
                              </div>
                              <h6>Autenticação de traduções e documentos estrangeiros.</h6>
                              <p>O tradutor juramentado tem fé pública em todo o território nacional.</p>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="item">
                              <div class="icon-box">
                                 <figure>
                                    <a href="#">
                                       <img src="images/resource/4.png" alt="">
                                    </a>
                                 </figure>
                              </div>
                              <h6>Transcrição de áudio e vídeo</h6>
                              <p>Transcrição de áudio e vídeo, digital ou analógico. Integrais e corrigidas.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End about section-->

      <!--about section-->
      <section class="feature-section section bg-gray">
         <div class="container">
            <div class="row">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="accordion-section">
                  <div class="section-title">
                     <h3>CIDADANIA ITALIANA</h3>
                  </div>
                  <div class="accordion-holder">
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Por Onde Começar?
                                 </a>
                              </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                 non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                 sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                 helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                 vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                 heard of them accusamus labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                 aria-controls="collapseTwo">
                                 Cidadania italiana na Itália ou no Brasil
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                              heard of them accusamus labore sustainable VHS.
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                              aria-controls="collapseThree">
                              Convenção da apostila de Haia
                           </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                           non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                           sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                           helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                           vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                           heard of them accusamus labore sustainable VHS.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</section>
<!--End about section-->

<div class="section-title text-center">
   <h3>Nossa Empresa
      <!-- <span>de Nossa Empresa</span> -->
   </h3>
   <p>Conheça Nossa Trajetória</p>
</div>
<!--Start about us area-->
<section class="service-tab-section section">
   <div class="outer-box clearfix">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!-- Nav tabs -->
               <div class="tabs">
                  <ul class="nav nav-tabs" role="tablist">
                     <li role="presentation" class="active">
                        <a href="#dormitory"  data-toggle="tab">Sobre a Empresa</a>
                     </li>
                     <li role="presentation">
                        <a href="#orthopedic" data-toggle="tab">História</a>
                     </li>
                     <li role="presentation">
                        <a href="#sonogram" data-toggle="tab">Compromisso</a>
                     </li>
                     <li role="presentation">
                        <a href="#x-ray" data-toggle="tab">Intérpretes</a>
                     </li>
                  </ul>
               </div>
               <!--Start single tab content-->
               <div class="tab-content">
                  <div class="service-box tab-pane fade in active row" id="dormitory">
                     <div class="col-md-6">
                        <img class="img-responsive" src="images/novas/brasao.jpg" alt="service-image">
                     </div>
                     <div class="col-md-6">
                        <div class="contents">
                           <div class="section-title">
                              <h3>Sobre a JURAMENTADAS.COM</h3>
                           </div>
                           <div class="text">
                              <p>Somos uma agência de tradução consolidada no mercado nacional, com vasta experiência, formada por uma equipe de profissionais altamente qualificados, esculpidos pela EXPERIÊNCIA da vida no Brasil e no exterior. Somos comprometidos com a qualidade de serviços prestados e com a agilidade no atendimento ao cliente. Esforçamo-nos para fidelizar nossos clientes e para ajudar a construir um país melhor e maior já que somos um dos países do BRICS.

                                 Para melhor atender nossos clientes, investimos constantemente em informação.

                                 Nossas referências profissionais de Órgãos Públicos ou Empresas Privadas estão em nossa página de CLIENTES referenciados. Veja também os depoimentos de nossos clientes!</p>
                              </div>
                              <!-- <ul class="content-list">
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                           </ul>
                           <a href="#" class="btn btn-style-one">Read more</a> -->
                        </div>
                     </div>
                  </div>
                  <!--End single tab content-->
                  <!--Start single tab content-->
                  <div class="service-box tab-pane fade in" id="orthopedic">
                     <div class="col-md-6">
                        <img class="img-responsive" src="images/novas/historia.jpg" alt="service-image">
                     </div>
                     <div class="col-md-6">
                        <div class="contents">
                           <div class="section-title">
                              <h3>História da Empresa</h3>
                           </div>
                           <div class="text">
                              <p>A JURAMENTADAS.COM, empresa fundada por uma imigrante italiana A.C.B. em 1976, desde o começo de sua trajetória e abertura de seus negócios, trabalhando como secretária executiva para Multinacionais, foi se aprimorando em seu segmento graças à constante preocupação com a fidelidade de suas traduções, fossem elas científicas, literárias, técnicas, legais, juramentadas, ou mesmo de segmentos específicos.

                                 Como secretária poliglota de multinacionais, no tempo em que elas existiam, elas traduziam qualquer assunto independente de tudo. Na época das máquinas IBM com esferas e sem gratificação pelo feito....faziam milagres!

                                 Para isso, construiu ao longo de anos, parcerias nos mais diversos segmentos, aliando todo o conhecimento linguístico de seus tradutores às consultorias de profissionais de diversas áreas, resultando assim, em uma fiel transcrição dos documentos originais em mais idiomas diferentes, trabalhando com mais de 63 tradutores.

                                 Hoje, a JURAMENTADAS.COM investe em seu crescimento e em sua estrutura, ampliando seus negócios no coração financeiro da América Latina, - "Av. Paulista", até a capacitação constante de seus profissionais e colaboradores.</p>
                              </div>
                              <!-- <ul class="content-list">
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                              <li>
                              <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                           </ul>
                           <a href="#" class="btn btn-style-one">Read more</a> -->
                        </div>
                     </div>
                  </div>
                  <!--End single tab content-->
                  <!--Start single tab content-->
                  <div class="service-box tab-pane fade in" id="sonogram">
                     <div class="col-md-6">
                        <img class="img-responsive" src="images/novas/passaportes.jpg" alt="service-image">
                     </div>
                     <div class="col-md-6">
                        <div class="contents">
                           <div class="section-title">
                              <h3>Compromisso com o Cliente</h3>
                           </div>
                           <!-- <div class="text">
                           <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                           then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                           <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                           then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        </div> -->

                        <ul class="content-list">
                           <li>
                              <i class="fa fa-dot-circle-o"></i>Missão: Cumprir com sua missão e proporcionar a comunicação entre empresas e pessoas, facilitando as relações, fomentando negócios e oportunidades, atendendo às exigências do mundo globalizado. Nós traduzimos porque gostamos do que fazemos.</li>
                              <li>
                                 <i class="fa fa-dot-circle-o"></i>1. Qualidade total: Dos serviços prestados, através da utilização de norma internacional que padroniza os serviços de tradução e versão de textos.</li>
                                 <li>
                                    <i class="fa fa-dot-circle-o"></i>2. Comprometimento: Em atender as necessidades dos nossos clientes.</li>
                                    <li>
                                       <i class="fa fa-dot-circle-o"></i>2. Comprometimento: Em atender as necessidades dos nossos clientes.</li>
                                       <li>
                                          <i class="fa fa-dot-circle-o"></i>3. Segurança das Informações: as informações fornecidas pelos clientes são confidenciais e mantidas sob rigorosa segurança.</li>
                                          <li>
                                             <i class="fa fa-dot-circle-o"></i>4. Rapidez: utilizamos de tecnologia para aumento da produtividade, proporcionando eficiência e agilidade.</li>
                                             <li>
                                                <i class="fa fa-dot-circle-o"></i>5. Preço Justo: qualidade não custa mais caro! Praticamos os melhores preços do mercado.</li>
                                             </ul>
                                             <a href="#" class="btn btn-style-one">Read more</a>
                                          </div>
                                       </div>
                                    </div>
                                    <!--End single tab content-->
                                    <!--Start single tab content-->
                                    <div class="service-box tab-pane fade in" id="x-ray">
                                       <div class="col-md-6">
                                          <img class="img-responsive" src="images/novas/interprete.jpg" alt="service-image">
                                       </div>
                                       <div class="col-md-6">
                                          <div class="contents">
                                             <div class="section-title">
                                                <h3>Intérpretes para eventos internacionais</h3>
                                             </div>
                                             <div class="text">
                                                <p>A JURAMENTADAS.COM está preparada para suas necessidades em qualquer área!

                                                   Com a rápida expansão do mercado, empresas multinacionais tiveram que adotar ferramentas de comunicação corporativa para manter seu posicionamento de mercado. Isso inclui tudo. Desde a embalagem dos produtos até os seus manuais, material de marketing e de divulgação, para se comunicar de forma efetiva com os clientes a empresa precisa manter a consistência nas várias culturas e vários tipos de formatos de arquivo para se adaptar aos mercados locais.

                                                   No caso de empresas com grandes volumes de tradução, a JURAMENTADAS.COM possui uma área própria com condições diferenciadas e com a designação de gerentes de projetos que podem ajudar a definir quais as reais necessidades. Essa modalidade também inclui a criação de memória de tradução, onde todo o material traduzido é armazenado e pode ser usado em traduções futuras, o que resulta em uniformização de dados, consistência e principalmente economia de custos.

                                                   Nessa modalidade também contamos com a definição prévia de valores, onde os pedidos podem ser pré-aprovados, assim otimizando o processo de cotação.</p>
                                                </div>
                                                <!-- <ul class="content-list">
                                                <li>
                                                <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                <li>
                                                <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                <li>
                                                <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                             </ul>
                                             <a href="#" class="btn btn-style-one">Read more</a> -->
                                          </div>
                                       </div>
                                    </div>
                                    <!--End single tab content-->


                                    <!--Start single tab content-->
                                    <div class="service-box tab-pane fade in" id="diagnostic">
                                       <div class="col-md-6">
                                          <img class="img-responsive" src="images/services/service-five.jpg" alt="service-image">
                                       </div>
                                       <div class="col-md-6">
                                          <div class="contents">
                                             <div class="section-title">
                                                <h3>diagnostic</h3>
                                             </div>
                                             <div class="text">
                                                <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                   then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                   <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                                                      then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                                                   </div>
                                                   <ul class="content-list">
                                                      <li>
                                                         <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental</li>
                                                         <li>
                                                            <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                            <li>
                                                               <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves</li>
                                                            </ul>
                                                            <a href="#" class="btn btn-style-one">Read more</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!--End single tab content-->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <!--End FAQ us area-->

                                 <!--testimonial-section-->
                                 <section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
                                    <div class="container">
                                       <div class="section-title text-center">
                                          <h3>O que nossos
                                             <span>Clientes Dizem</span>
                                          </h3>
                                       </div>
                                       <div class="testimonial-carousel">
                                          <!--Slide Item-->
                                          <div class="slide-item">
                                             <div class="inner-box text-center">
                                                <div class="image-box">
                                                   <figure>
                                                      <img src="images/novas/bauducco.jpg" alt="">
                                                   </figure>
                                                </div>
                                                <h6>Bauducco</h6>
                                                <p>"A JURAMENTADAS.COM oferece um serviço de qualidade, com a agilidade que as empresas hoje buscam. Nas últimas três empresas que trabalhei, utilizei os serviços da JURAMENTADAS.COM, na tradução de documentos jurídicos, em inglês e espanhol e sempre fui muito bem atendida. O comprometimento com a qualidade e com o atendimento aos prazos são os grandes diferenciais."
                                                   <br><br>

                                                   Natalie Ghiraldelli de Oliveira</p>
                                                </div>
                                             </div>
                                             <!--Slide Item-->
                                             <div class="slide-item">
                                                <div class="inner-box text-center">
                                                   <div class="image-box">
                                                      <figure>
                                                         <img src="images/novas/pepsico.jpg" alt="">
                                                      </figure>
                                                   </div>
                                                   <h6>Pepsico</h6>
                                                   <p>"A JURAMENTADAS.COM atendeu a PEPSICO de maneira muito eficiente, com prazo extremamente apertado e com muita habilidade com as alterações de última hora. Não fosse por essa flexibilidade, o primeiro dia de uma conferência de quatro dias teria sido sacrificado por falta de tradução simultânea adequada."

                                                      <br><br><br>
                                                      Alexandrina Lopes</p>
                                                   </div>
                                                </div>
                                                <!--Slide Item-->
                                                <div class="slide-item">
                                                   <div class="inner-box text-center">
                                                      <div class="image-box">
                                                         <figure>
                                                            <img src="images/novas/ge_work.jpg" alt="">
                                                         </figure>
                                                      </div>
                                                      <h6>GE</h6>
                                                      <p>GE
                                                         "A JURAMENTADAS.COM oferece um serviço com a agilidade que as empresas hoje buscam? Sim, claro! Sempre que trabalhamos com a JURAMENTADAS.COM encontramos a mesma qualidade em todos os serviços. São fiéis aos prazos e empáticos às nossas necessidades. Não temos do que reclamar, a JURAMENTADAS.COM trabalha com seriedade e qualidade."

                                                         <br>
                                                         Robson Carvalho</p>
                                                      </div>
                                                   </div>
                                                   <!--Slide Item-->
                                                   <div class="slide-item">
                                                      <div class="inner-box text-center">
                                                         <div class="image-box">
                                                            <figure>
                                                               <img src="images/novas/synova.jpg" alt="">
                                                            </figure>
                                                         </div>
                                                         <h6>SYNOVA</h6>
                                                         <p>SYNOVA
                                                            "A JURAMENTADAS.COM é uma empresa versátil do ponto de vista corporativo, sem dúvida é uma ótima solução para quem procura velocidade versus assertividade."

                                                            <br><br><br><br>
                                                            Alcides B. dos Santos Jr.</p>
                                                         </div>
                                                      </div>
                                                      <!--Slide Item-->
                                                      <div class="slide-item">
                                                         <div class="inner-box text-center">
                                                            <div class="image-box">
                                                               <figure>
                                                                  <img src="images/novas/tudoempauta.jpg" alt="">
                                                               </figure>
                                                            </div>
                                                            <h6>Tudo em Pauta</h6>
                                                            <p>"Sempre que precisamos dos serviços da JURAMENTADAS.COM, fomos atendidos com muita agilidade e pontualidade. Sendo assim, a JURAMENTADAS.COM é para nós como referência em atendimento e competência, deixando-nos a vontade para indicarmos e termos com fonte de parceira em nossos serviços."
                                                               <br><br>
                                                               Fábio Souza - Depto. Financeiro - Tudo em Pauta Assessoria de Imprensa</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </section>
                                                <!--End testimonial-section-->

                                                <!-- Contact Section -->
                                                <section class="appoinment-section section">
                                                   <div class="container">
                                                      <div class="row">
                                                         <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="accordion-section">
                                                               <div class="section-title">
                                                                  <h3>FAQ</h3>
                                                               </div>
                                                               <div class="accordion-holder">
                                                                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                     <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                                           <h4 class="panel-title">
                                                                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                                 Why Should I choose Medical Health
                                                                              </a>
                                                                           </h4>
                                                                        </div>
                                                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                           <div class="panel-body">
                                                                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                              non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                              sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                              helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                                              vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                                              heard of them accusamus labore sustainable VHS.
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                                           <h4 class="panel-title">
                                                                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                                              aria-controls="collapseTwo">
                                                                              What are the Centre’s visiting hours?
                                                                           </a>
                                                                        </h4>
                                                                     </div>
                                                                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                        <div class="panel-body">
                                                                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                           non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                           sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                           helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                                           vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                                           heard of them accusamus labore sustainable VHS.
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="panel panel-default">
                                                                     <div class="panel-heading" role="tab" id="headingThree">
                                                                        <h4 class="panel-title">
                                                                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                                           aria-controls="collapseThree">
                                                                           How many visitors are allowed?
                                                                        </a>
                                                                     </h4>
                                                                  </div>
                                                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                     <div class="panel-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                                                                        heard of them accusamus labore sustainable VHS.
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6 col-sm-12 col-xs-12">
                                                      <div class="contact-area">
                                                         <div class="section-title">
                                                            <h3>Request
                                                               <span>Appointment</span>
                                                            </h3>
                                                         </div>
                                                         <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                                                            <div class="row">
                                                               <div class="col-md-6 col-sm-12 col-xs-12">
                                                                  <div class="form-group">
                                                                     <input type="text" name="Name" placeholder="Name" required="">
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <input type="email" name="Email" placeholder="Email" required="">
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <select name="subject">
                                                                        <option>Departments</option>
                                                                        <option>Diagnostic</option>
                                                                        <option>Psychological</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-6 col-sm-12 col-xs-12">
                                                                  <div class="form-group">
                                                                     <input type="text" name="Phone" placeholder="Phone" required="">
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                                                                     <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <select name="subject">
                                                                        <option>Doctor</option>
                                                                        <option>Diagnostic</option>
                                                                        <option>Psychological</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                               <div class="col-md-12 col-sm-12 col-xs-12">
                                                                  <div class="form-group">
                                                                     <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                                                                  </div>
                                                                  <div class="form-group text-center">
                                                                     <button type="submit" class="btn-style-one">submit now</button>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </section>
                                          <!-- End Contact Section -->

                                       </div>
                                       <!--End pagewrapper-->

                                       <!--Scroll to top-->
                                       <div class="scroll-to-top scroll-to-target" data-target=".header-top">
                                          <span class="icon fa fa-angle-up"></span>
                                       </div>



                                    @stop
