<?php

namespace App\Http\Controllers;
use App\Locale_pt;
use App\Locale_en;
use App\Locale_es;
use App\Locale_it;
use App\Sobre;
use App\Idiomas;
use App\Localizacao;
use App\Footer;
use App\Header;
use App\Navbar;
use App\Slider;
use App\Clientes;
use App\Depoimentos;
use App\Cidadania;

use Illuminate\Http\Request;

class SiteController extends Controller
{

   public function Index()
   {
      if( \Session::get('lang') == null ){
         $lang = 'pt';
         $this->SitesetIdioma($lang);
      }

      \Session::put('area', 'index');
      $lang = \Session::get('lang');
      $itens_index = $this -> ConstroiLayoutIndex($lang);
      return view('welcome', $itens_index);
   }

   public function SiteSetIdioma($lang)
   {
      \Session::put('lang', $lang);
      return redirect('/');
   }

   public function ConstroiLayoutIndex($lang){
      $headers = $this -> TraduzHeader($lang);
      $menu = $this -> TraduzMenu($lang);
      $sliders = $this -> TraduzSliders($lang);
      $servicos = $this -> TraduzServicos($lang);
      $sobres = $this -> TraduzSobre($lang);
      $depoimentos = $this -> TraduzDepoimentos($lang);
      $cidadanias = $this -> TraduzCidadania();
      $footers = $this -> TraduzFooter($lang);
      $traduz_global = $this -> TraduzGlobais($lang);

      return [
         'headers' => $headers,
         'menu' => $menu,
         'sliders' => $sliders,
         'servicos' => $servicos,
         'sobres' => $sobres,
         'depoimentos' => $depoimentos,
         'cidadanias' => $cidadanias,
         'footers' => $footers,
         'traduz_global' => $traduz_global,
      ];

   }

   public function ConstroiLayoutPages($lang){
      $headers = $this -> TraduzHeader($lang);
      $menu = $this -> TraduzMenu($lang);
      $sliders = $this -> TraduzSliders($lang);
      $footers = $this -> TraduzFooter($lang);
      $traduz_global = $this -> TraduzGlobais($lang);

      return [
         'headers' => $headers,
         'menu' => $menu,
         'sliders' => $sliders,
         'footers' => $footers,
         'traduz_global' => $traduz_global,
      ];
   }

   //  PÁGINAS ------------------------------------------------------------------

   public function SiteServicos($lang, $textos_posicao){

      if ($lang == 'pt'){
         $servicos = Locale_pt::where(['textos_posicao' => $textos_posicao]) -> first();
      }elseif ($lang == 'en'){
         $servicos = Locale_en::where(['textos_posicao' => $textos_posicao]) -> first();
      }elseif ($lang == 'es') {
         $servicos = Locale_es::where(['textos_posicao' => $textos_posicao]) -> first();
      }elseif ($lang == 'it') {
         $servicos = Locale_it::where(['textos_posicao' => $textos_posicao]) -> first();
      }

      \Session::put('area', 'servicos');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.servicos', $itens_paginas, ['servicos' => $servicos]);

   }

   public function SiteIdiomas($lang)
   {
      $idiomas = Idiomas::where(['tab_lang' => $lang]) -> first();

      \Session::put('area', 'idiomas');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.idiomas', $itens_paginas, ['idiomas' => $idiomas]);
   }

   public function SiteCidadania($lang)
   {
      $cidadanias = Cidadania::get();

      \Session::put('area', 'cidadania');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.cidadania', $itens_paginas, ['cidadanias' => $cidadanias]);
   }

   public function SiteParceiros($lang)
   {
      $parceiros = Clientes::orderBy('id', 'ASC') -> paginate(50);

      \Session::put('area', 'parceiros');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.parceiros', $itens_paginas, ['parceiros' => $parceiros]);
   }

   public function SiteCartas($lang)
   {
      \Session::put('area', 'cartas');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.cartas', $itens_paginas);
   }

   public function SiteLocalizacao($lang){
      $locals = localizacao::where('tab_lang', 'LIKE', $lang) -> first();

      \Session::put('area', 'local');
      $itens_paginas = $this -> ConstroiLayoutPages($lang);
      return view('paginas.localizacao', $itens_paginas, ['locals' => $locals]);
   }

   // TRADUZ MENUS E ITENS

   public function TraduzSliders($lang){
      $sliders = Slider::where('tab_lang', 'like', $lang) -> get();
      return $sliders;
   }

   public function TraduzMenu($lang){
      $navbars = Navbar::where('tab_lang', 'like', $lang) -> get();
      $nav =  $navbars[0]['navbar_itens'];
      $menu = $array = explode(';', $nav);
      return $menu;
   }

   public function TraduzHeader($lang){
      $headers = Header::where('tab_lang', 'like', $lang) -> first();
      // $headerTop =  $headers[0]['header_top'];
      return $headers;
   }

   // public function TraduzHeaderUpper($lang){
   //    $headers = Header::where('tab_lang', 'like', $lang) -> get();
   //    $headerUpper = $array = explode(';', $headers[0]['header_upper']);
   //    return $headerUpper;
   // }

   public function TraduzServicos($lang){

      if ($lang == 'pt'){
         $servicos = Locale_pt::orderby('textos_posicao') -> get();
      }elseif ($lang == 'en'){
         $servicos = Locale_en::orderby('textos_posicao') -> get();
      }elseif ($lang == 'es') {
         $servicos = Locale_es::orderby('textos_posicao') -> get();
      }elseif ($lang == 'it') {
         $servicos = Locale_it::orderby('textos_posicao') -> get();
      }
      return $servicos;
   }

   public function TraduzCidadania(){
      $cidadanias = Cidadania::get();
      return $cidadanias;
   }

   public function TraduzFooter($lang){
      $footers = Footer::where('tab_lang', 'like', $lang) -> get() -> toArray();
      return $footers;
   }

   public function TraduzDepoimentos($lang){
      $depoimentos = Depoimentos::where('tab_lang', 'like', $lang) -> get();
      return $depoimentos;
   }

   public function TraduzSobre($lang){
      $sobres = Sobre::where('tab_lang', 'like', $lang) -> get();
      return $sobres;
   }

   public function TraduzGlobais($lang)
   {
      if ($lang == 'pt') {
         $traduz_global =
         [
            'escolha_idioma' => 'Escolha o Idioma',
            'ligue_agora' => 'Ligue Agora',
            'solicite_orcamento' => 'Solicite um Orçamento',

            'painel_texto1' => 'Atendimento 24h - WhatsApp',
            'painel_texto2' => 'Apostilamento de Documentos em 24h',
            'painel_texto3' => 'Cidadania Italiana - Descontos Especiais em traduções para cidadania Italiana',

            'botao1' => 'Saiba mais',
            'botao2' => 'Clique Aqui',
            'email' => 'Email',

            'servicos_titulo1' => 'Serviços',
            'servicos_titulo2' => 'Confira os Serviços que Nossa Empresa Oferece pra Você',

            'empresa_titulo1' => 'Nossa Empresa',
            'empresa_titulo2' => 'Conheça Nossa Trajetória',

            'depoimentos' => 'Depoimentos',

            'idiomas_titulo1' => 'Idiomas',
            'idiomas_titulo2' => '30 Idiomas Simples e Juramentados',

            'parceiros' => 'Conheça Nossos Parceiros',
            'cartas' => 'Cartas de Recomendação',
            'faq' => 'Perguntas Frequentes',

            'local_titulo1' => 'Localização e Contato',
            'local_texto_local' => 'Localização',
            'local_texto_tel' => 'Telefone',

            'local_form_tipo_pessoa' => 'Tipo Pessoa',
            'local_form_pf' => 'Pessoa Física',
            'local_form_pj' => 'Pessoa Jurídica',
            'local_form_nome' => 'Nome',
            'local_form_cidade' => 'Cidade',
            'local_form_estado' => 'Estado',
            'local_form_tel' => 'Telefone',
            'local_form_email' => 'Email',
            'local_form_mensagem' => 'Mensagem',
            'local_upload' => 'Anexar Arquivo',
            'local_form_botao' => 'Enviar Mensagem',
         ];

      }elseif ($lang == 'en') {
         $traduz_global =
         [
            'escolha_idioma' => 'Choose the Language',
            'ligue_agora' => 'Call Now',
            'solicite_orcamento' => 'Get a Quote',

            'painel_texto1' => '24h Service - WhatsApp',
            'painel_texto2' => 'Apostilamento de Documentos em 24h (traduzir para ingles)',
            'painel_texto3' => 'Italian Citzenship - Special Discounts for Translations',

            'botao1' => 'Read More',
            'botao2' => 'Click Here',
            'email' => 'Email',

            'servicos_titulo1' => 'Services',
            'servicos_titulo2' => 'Check out the Services Our Company Offers to You',

            'empresa_titulo1' => 'Our Company',
            'empresa_titulo2' => 'Know Our History',

            'depoimentos' => 'Testimony',

            'idiomas_titulo1' => 'Idioms',
            'idiomas_titulo2' => '30 Simple and Sworn Idioms',

            'parceiros' => 'Our Partners',
            'cartas' => 'References',
            'faq' => 'Frequent Asked Question',

            'local_titulo1' => 'Contact and Location',
            'local_texto_local' => 'Location',
            'local_texto_tel' => 'Phone',

            'local_form_tipo_pessoa' => 'Requester',
            'local_form_pf' => 'Natural Person',
            'local_form_pj' => 'Legal Entity',
            'local_form_nome' => 'Name',
            'local_form_cidade' => 'City',
            'local_form_estado' => 'State',
            'local_form_tel' => 'Telephone',
            'local_form_email' => 'Email',
            'local_form_mensagem' => 'Message',
            'local_upload' => 'Attach File',
            'local_form_botao' => 'Send Message',

         ];
      }elseif ($lang == 'es') {
         $traduz_global =
         [
            'escolha_idioma' => 'Elegir el Idioma',
            'ligue_agora' => 'Llame Ahora',
            'solicite_orcamento' => 'Solicitar Pressupuesto',

            'painel_texto1' => 'Servicio 24h - WhatsApp',
            'painel_texto2' => 'Apostilamento de Documentos em 24h (traduzir para espanhol)',
            'painel_texto3' => 'Cidadania Italiana - Descuentos Especiales Para La Traducción',

            'botao1' => 'Lea Más',
            'botao2' => 'Haga Clic Aquí',
            'email' => 'Email',

            'servicos_titulo1' => 'Servicios',
            'servicos_titulo2' => 'Compruebe los Servicios que Nuestra Empresa ofrece para Usted',

            'empresa_titulo1' => 'Nuestra Empresa',
            'empresa_titulo2' => 'Conozca Nuestra Historia',

            'depoimentos' => 'Testimonios',

            'idiomas_titulo1' => 'Idiomas',
            'idiomas_titulo2' => 'Simples y Públicas en 30 Idiomas',

            'parceiros' => 'Conozca Nuestros Colaboradores',
            'cartas' => 'Cartas de Recomendación',
            'faq' => 'Preguntas Frecuentes',

            'local_titulo1' => 'Ubicación y Contacto',
            'local_texto_local' => 'Ubicación',
            'local_texto_tel' => 'Teléfono',

            'local_form_tipo_pessoa' => 'Solicitante',
            'local_form_pf' => 'Persona Física',
            'local_form_pj' => 'Persona Jurídica',
            'local_form_nome' => 'Nombre',
            'local_form_cidade' => 'Ciudad',
            'local_form_estado' => 'Estado',
            'local_form_tel' => 'Telephone',
            'local_form_email' => 'Email',
            'local_form_mensagem' => 'Mensage',
            'local_upload' => 'Adjuntar Arquivo',
            'local_form_botao' => 'Enviar',
         ];
      }elseif ($lang == 'it') {
         $traduz_global =
         [
            'escolha_idioma' => 'Scegliere la lingua',
            'ligue_agora' => 'Chiama Ora',
            'solicite_orcamento' => 'Richiedete Ora un Preventivo ',

            'painel_texto1' => 'Servizio 24 Ore - WhatsApp',
            'painel_texto2' => 'Apostilamento de Documentos em 24h (traduzir para ITALIANO)',
            'painel_texto3' => 'Cittadinanza Italiana - Sconti Speciali Per le Traduzioni',

            'botao1' => 'Leggi di Più',
            'botao2' => 'Clicca Qui',
            'email' => 'Email',

            'servicos_titulo1' => 'Servizi',
            'servicos_titulo2' => 'Scopri i servizi offerti dalla nostra azienda',

            'empresa_titulo1' => 'Nostra Azienda',
            'empresa_titulo2' => 'Conosci la Nostra Storia',

            'depoimentos' => 'Testimonianze',

            'idiomas_titulo1' => 'Lingue',
            'idiomas_titulo2' => '30 Lingue Semplice e Giurata',

            'parceiros' => 'Partner',
            'cartas' => 'Lettera de Raccomandazione',
            'faq' => 'Domande Frequenti',

            'local_titulo1' => 'Località i Contatti',
            'local_texto_local' => 'Località',
            'local_texto_tel' => 'Telefono',

            'local_form_tipo_pessoa' => 'Richiedente',
            'local_form_pf' => 'Persona Fisica',
            'local_form_pj' => 'Persona Giuridica',
            'local_form_nome' => 'Nome',
            'local_form_cidade' => 'Città',
            'local_form_estado' => 'Stato',
            'local_form_tel' => 'Telefono',
            'local_form_email' => 'Email',
            'local_form_mensagem' => 'Osservazioni Importanti',
            'local_upload' => 'Allegare File',
            'local_form_botao' => 'Inviare',
         ];
      }
      return $traduz_global;
   }
}
