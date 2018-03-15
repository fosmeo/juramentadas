
<nav id="sidebar-nav">
    @if(session() -> get('lang')=='pt' || session() -> get('lang')=='en' || session() -> get('lang')=='es' || session() -> get('lang')=='it')

        <ul class="">
            <h5>Consultas</h5>
            <br>
            <li><a href="{!! route('gerenciador.orcamentos') !!}">Orçamentos</a></li>
            <li><a href="{!! route('gerenciador.logs') !!}">Logs</a></li>
        </ul>

        <ul class="">
            <h5>Gerenciador Site</h5>
            <br>
            <li><a href="{!! route('gerenciador.inicial', session() -> get('lang')) !!}">Página Inicial</a></li>
            <li><a href="{!! route('gerenciador.sobre', session() -> get('lang')) !!}">Sobre a Empresa</a></li>
            <li><a href="{!! route('gerenciador.idiomas', session() -> get('lang')) !!}">Idiomas</a></li>
            <li><a href="{!! route('gerenciador.clientes.lista') !!}">Clientes</a></li>
            <li><a href="{!! route('gerenciador.depoimentos', session() -> get('lang')) !!}">Depoimentos</a></li>
            <li><a href="{!! route('gerenciador.cartas', session() -> get('lang')) !!}">Cartas</a></li>
            <li><a href="{!! route('gerenciador.localizacao', session() -> get('lang')) !!}">Localização</a></li>
            <li><a href="{!! route('gerenciador.header', session() -> get('lang')) !!}">Header</a></li>
            <li><a href="{!! route('gerenciador.footer', session() -> get('lang')) !!}">Footer</a></li>
        </ul>

        <ul class="">
            <h5>Cidadania Italiana</h5>
            <br>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 1) !!}">Por onde Começar</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 2) !!}">Italia x Brasil</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 3) !!}">Apostila de Haia</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 4) !!}">Quem Tem Direito</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 5) !!}">Naturalização</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 6) !!}">Dúvidas Frequentes</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 7) !!}">Cidadania por Sangue</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 8) !!}">Cidadania por Casamento</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 9) !!}">Cidadania por Eleição</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 10) !!}">Cidadania Trentina</a></li>
            <li><a href="{!! route('gerenciador.cidadania.exibir', 11) !!}">Apostilamento</a></li>
        </ul>

    @endif()

</nav>
