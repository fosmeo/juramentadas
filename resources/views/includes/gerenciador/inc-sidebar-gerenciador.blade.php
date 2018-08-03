
<nav id="sidebar-nav" style="height:500px;overflow-y: auto">
    @if(session() -> get('languser')=='pt' || session() -> get('languser')=='en' || session() -> get('languser')=='es' || session() -> get('languser')=='it')

        <ul class="">
            <h4>Gerenciador Site</h4>
            <li><a href="{!! route('gerenciador.inicial', \Session::get('languser')) !!}">Páginas Serviços</a></li>
            <li><a href="{!! route('sobre.editar', \Session::get('languser')) !!}">Sobre a Empresa</a></li>
            <li><a href="{!! route('gerenciador.idiomas', \Session::get('languser')) !!}">Idiomas</a></li>
            <li><a href="{!! route('clientes.lista') !!}">Editar Clientes</a></li>
            <li><a href="{!! route('depoimentos.lista') !!}">Editar Depoimentos</a></li>
            {{-- <li><a href="{!! route('gerenciador.cartas') !!}">Cartas</a></li> --}}
            <li><a href="{!! route('gerenciador.localizacao', \Session::get('languser')) !!}">Localização</a></li>
            <li><a href="{!! route('gerenciador.navbar', \Session::get('languser')) !!}">Menu</a></li>
            <li><a href="{!! route('gerenciador.header', \Session::get('languser')) !!}">Header</a></li>
            <li><a href="{!! route('gerenciador.footer', \Session::get('languser')) !!}">Footer</a></li>
            <li><a href="{!! route('sliders.lista') !!}">Editar Sliders</a></li>
            <li><a href="{!! route('faq.editar', \Session::get('languser')) !!}">FAQ</a></li>
        </ul>
        <hr>
        <ul class="">
            <h4>Cidadania Italiana</h4>
            <li><a href="{!! route('cidadania.exibir', 1) !!}">Por onde Começar</a></li>
            <li><a href="{!! route('cidadania.exibir', 2) !!}">Italia x Brasil</a></li>
            <li><a href="{!! route('cidadania.exibir', 3) !!}">Apostila de Haia</a></li>
            <li><a href="{!! route('cidadania.exibir', 4) !!}">Quem Tem Direito</a></li>
            <li><a href="{!! route('cidadania.exibir', 5) !!}">Naturalização</a></li>
            <li><a href="{!! route('cidadania.exibir', 6) !!}">Cidadania Trentina</a></li>
            <li><a href="{!! route('cidadania.exibir', 7) !!}">Cidadania por Sangue</a></li>
            <li><a href="{!! route('cidadania.exibir', 8) !!}">Cidadania por Casamento</a></li>
            <li><a href="{!! route('cidadania.exibir', 9) !!}">Cidadania por Eleição</a></li>
            <li><a href="{!! route('cidadania.exibir', 10) !!}">Dúvidas Frequentes</a></li>
            <li><a href="{!! route('cidadania.exibir', 11) !!}">Apostilamento</a></li>
        </ul>
        <hr>
        <ul class="">
            <h4>Consultas</h4>
            <li><a href="{!! route('other.orcamentos') !!}">Orçamentos</a></li>
            <li><a href="#">WhatsApp</a></li>
            <li><a href="{!! route('other.logs') !!}">Logs</a></li>
            <li><a href="{!! route('other.listausuarios') !!}">Lista de Usuários</a></li>
            <li><a href="{!! route('other.registrarusuarios') !!}">Registrar Usuário</a></li>
            <li><a href="{!! route('zerar_session') !!}">Limpar Session</a></li>
        </ul>

    @endif()

</nav>
