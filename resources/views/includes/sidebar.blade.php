
<nav id="sidebar-nav">
    @if(session() -> get('idioma')=='pt' || session() -> get('idioma')=='en' || session() -> get('idioma')=='es' || session() -> get('idioma')=='it')

    <ul class="">
        <li><a href="{!! url('setidioma')!!}">Trocar Idioma</a></li>
        <br>
        <h5>Gerenciador Site</h5>
        <br>
        <li><a href="{!! url('/gerenciador/site/inicial/'.session() -> get('idioma')) !!}">Página Inicial</a></li>
        <li><a href="{!! url('/gerenciador/site/sobre/'.session() -> get('idioma')) !!}">Sobre a Empresa</a></li>
        <li><a href="{!! url('/gerenciador/site/idiomas/'.session() -> get('idioma')) !!}">Idiomas</a></li>
        <li><a href="{!! url('/gerenciador/site/clientes/'.session() -> get('idioma')) !!}">Clientes</a></li>
        <li><a href="{!! url('/gerenciador/site/depoimentos/'.session() -> get('idioma')) !!}">Depoimentos</a></li>
        <li><a href="{!! url('/gerenciador/site/cartas/'.session() -> get('idioma')) !!}">Cartas</a></li>
        <li><a href="{!! url('/gerenciador/site/localizacao/'.session() -> get('idioma')) !!}">Localização</a></li>
        <li><a href="{!! url('/gerenciador/site/header/'.session() -> get('idioma')) !!}">Header</a></li>
        <li><a href="{!! url('/gerenciador/site/footer/'.session() -> get('idioma')) !!}">Footer</a></li>
        <li><a href="{!! url('/gerenciador/other/orcamentos') !!}">Orçamentos</a></li>
        <li><a href="{!! url('/gerenciador/other/logs') !!}">Logs</a></li>
    </ul>

    <ul class="">
        <h5>Cidadania Italiana</h5>
        <br>
        <li><a href="{!! route('gerenciador.cid.comecar') !!}">Por onde Começar</a></li>
        <li><a href="{!! route('gerenciador.cid.direito') !!}">Quem Tem Direito</a></li>
        <li><a href="{!! route('gerenciador.cid.duvidas') !!}">Dúvidas Frequentes    </a></li>
        <li><a href="{!! route('gerenciador.cid.eleicao') !!}">Cidadania por Eleição</a></li>
        <li><a href="{!! route('gerenciador.cid.haia') !!}">Apostila de Haia</a></li>
        <li><a href="{!! route('gerenciador.cid.itabra') !!}">Italia ou Brasil</a></li>
        <li><a href="{!! route('gerenciador.cid.natural') !!}">Naturalização</a></li>
        <li><a href="{!! route('gerenciador.cid.sangue') !!}">Cidadania por Sangue</a></li>
        <li><a href="{!! route('gerenciador.cid.trentina') !!}">Cidadania Trentina</a></li>
    </ul>

    @endif()

</nav>
