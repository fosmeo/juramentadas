{{-- <div class="container">
   <div class="row"> --}}
      <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="accordion-section">
            <div class="section-title">
               <h3>{{ $traduz_global['faq'] }}</h3>
            </div>
            <div class="accordion-holder">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">

                     @foreach ($faqs as $faq)

                     <div class="panel-heading" role="tab" id="heading{{ $faq -> id }}">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $faq -> id }}" aria-expanded="true" aria-controls="collapse{{ $faq -> id }}">
                              {{ $faq -> faq_pergunta }}
                           </a>
                        </h4>
                     </div>

                     <div id="collapse{{ $faq -> id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $faq -> id }}">
                        <div class="panel-body">
                           {{ $faq -> faq_resposta }}
                        </div>
                     </div>

                     @endforeach

                  </div>


               </div>
            </div>
         </div>
      </div>
   {{-- </div>
</div> --}}
