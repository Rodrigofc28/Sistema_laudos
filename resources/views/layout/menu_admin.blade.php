<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="{{ route('home') }}">Laudos Balísticos</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
        
    </button>
    <h5 style="color:aliceblue;padding-left:10px"><strong>{{Auth::user()->nome}}</strong></h5>
    
</nav>

<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fa fa-fw fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown admin_menu">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-folder"></i>
                <span>Controle</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{ route('secoes.index') }}">Unidades</a>
                <a class="dropdown-item" href="{{ route('diretores.index') }}">Diretores</a>
                <a class="dropdown-item" href="{{ route('solicitantes.index') }}">Órgãos Solicitantes</a>
                <a class="dropdown-item" href="{{ route('marcas.index') }}">Marcas</a>
                <a class="dropdown-item" href="{{ route('calibres.index') }}">Calibres</a>
                <a class="dropdown-item" href="{{ route('cadastro_armas.index') }}">Cadastrar modelo</a>
                <a class="dropdown-item" href="{{ route('users.index') }}">Usuários</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('laudos.create') }}">
                <i class="fa fa-fw fa-file"></i>
                <span>Novo Laudo</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('laudos.index') }}">
                <i class="fa fa-fw fa-folder-open"></i>
                <span>Minhas REPS</span></a>
        </li>
        <li class="nav-item admin_reports">
            <a class="nav-link" href="{{ route('admin.relatorios.index') }}">
                <i class="fa fa-fw fa-chart-bar"></i>
                <span>Relatórios</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.laudos.index') }}">
                <i class="fa fa-fw fa-folder-open"></i>
                <span>Todos os Laudos</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-sign-out-alt"></i>
                <span>{{ __('Logout') }}</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>