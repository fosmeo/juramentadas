
<nav id="sidebar-nav">
    @if(session() -> get('lang')=='pt' || session() -> get('lang')=='en' || session() -> get('lang')=='es' || session() -> get('lang')=='it')

        <ul class="">
            <h5>Consultas</h5>
            <br>
            <li><a href="{!! route('other.orcamentos') !!}">Orçamentos</a></li>
            <li><a href="{!! route('other.logs') !!}">Logs</a></li>
            <li><a href="{!! route('other.listausuarios') !!}">Lista de Usuários</a></li>
            <li><a href="{!! route('other.registrarusuarios') !!}">Registrar Novo Usuário</a></li>
        </ul>

        <ul class="">
            <h5>Gerenciador Site</h5>
            <br>
            <li><a href="{!! route('gerenciador.inicial', \Session::get('lang')) !!}">Página Inicial</a></li>
            <li><a href="{!! route('gerenciador.sobre', \Session::get('lang')) !!}">Sobre a Empresa</a></li>
            <li><a href="{!! route('gerenciador.idiomas', \Session::get('lang')) !!}">Idiomas</a></li>
            <li><a href="{!! route('clientes.lista') !!}">Editar Clientes</a></li>
            <li><a href="{!! route('depoimentos.exibir', \Session::get('lang')) !!}">Editar Depoimentos</a></li>
            <li><a href="{!! route('gerenciador.cartas', \Session::get('lang')) !!}">Cartas</a></li>
            <li><a href="{!! route('gerenciador.localizacao', \Session::get('lang')) !!}">Localização</a></li>
            <li><a href="{!! route('gerenciador.navbar', \Session::get('lang')) !!}">Menu</a></li>
            <li><a href="{!! route('gerenciador.header', \Session::get('lang')) !!}">Header</a></li>
            <li><a href="{!! route('gerenciador.footer', \Session::get('lang')) !!}">Footer</a></li>
        </ul>

        <ul class="">
            <h5>Cidadania Italiana</h5>
            <br>
            <li><a href="{!! route('cidadania.exibir', 1) !!}">Por onde Começar</a></li>
            <li><a href="{!! route('cidadania.exibir', 2) !!}">Italia x Brasil</a></li>
            <li><a href="{!! route('cidadania.exibir', 3) !!}">Apostila de Haia</a></li>
            <li><a href="{!! route('cidadania.exibir', 4) !!}">Quem Tem Direito</a></li>
            <li><a href="{!! route('cidadania.exibir', 5) !!}">Naturalização</a></li>
            <li><a href="{!! route('cidadania.exibir', 6) !!}">Dúvidas Frequentes</a></li>
            <li><a href="{!! route('cidadania.exibir', 7) !!}">Cidadania por Sangue</a></li>
            <li><a href="{!! route('cidadania.exibir', 8) !!}">Cidadania por Casamento</a></li>
            <li><a href="{!! route('cidadania.exibir', 9) !!}">Cidadania por Eleição</a></li>
            <li><a href="{!! route('cidadania.exibir', 10) !!}">Cidadania Trentina</a></li>
            <li><a href="{!! route('cidadania.exibir', 11) !!}">Apostilamento</a></li>
        </ul>

    @endif()

</nav>
