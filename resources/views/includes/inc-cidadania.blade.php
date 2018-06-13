<div class="container">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="accordion-section">
            <div class="section-title text-center">
               <h3>Cidadania Italiana
                  <span>(Assessoria Completa)</span>
               </h3>
               <p>Descontos Especiais em Traduções para Cidadania Italiana</p>
            </div>
            <div class="accordion-holder">
               <div class="panel-group" id="accordion-cidadania" role="tablist" aria-multiselectable="true">

                  @foreach ($cidadanias as $cidadania)
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="heading-cidadania-{{$cidadania -> id}}">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-cidadania" href="#collapse-cidadania-{{$cidadania -> id}}" aria-expanded="false"
                           aria-controls="collapse-cidadania-1">
                           {!! $cidadania -> cidadania_titulo !!}
                           </a>
                        </h4>
                     </div>
                     <div id="collapse-cidadania-{{$cidadania -> id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-cidadania-{{$cidadania -> id}}">
                        <div class="panel-body">
                           {!! nl2br($cidadania -> cidadania_texto) !!}
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
