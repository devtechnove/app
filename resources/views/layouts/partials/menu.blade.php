<div class="container-fluid">
    <div id="two-column-menu">
    </div>
    <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a href="/home" class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-analytics"> <i class="mdi mdi-home"></i> Inicio </a>
        </li> <!-- end Dashboard Menu -->
        <li class="nav-item">
            <a href="/empresa" class="nav-link  {{ request()->routeIs('empresa.*') ? 'active' : '' }}" data-key="t-analytics"> <i class="mdi mdi-church"></i> Organización </a>
        </li>


        <li class="nav-item">
            <a class="nav-link menu-link {{ request()->routeIs('usuarios.*') ? 'active' : '' }} {{ request()->routeIs('logins') ? 'active' : '' }}" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                <i class="mdi mdi-lock-outline"></i> <span data-key="t-multi-level">Seguridad</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ url('/usuarios') }}" class="nav-link  {{ request()->routeIs('usuarios.*') ? 'active' : '' }}" data-key="t-registro-usuarios"> Usuarios </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/roles') }}" class="nav-link  {{ request()->routeIs('roles.*') ? 'active' : '' }}" data-key="t-registro-roles"> Roles & Permisos </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/logins') }}" class="nav-link  {{ request()->routeIs('logins.*') ? 'active' : '' }}" data-key="t-registro-sesion"> Registro de sesión </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ url('/logs') }}" class="nav-link  {{ request()->routeIs('logs.*') ? 'active' : '' }}" data-key="t-registro-logs"> Logs del sistema </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ url('/logins') }}" class="nav-link  {{ request()->routeIs('logins.*') ? 'active' : '' }}" data-key="t-registro-logins"> Historial de sesión </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link menu-link {{ request()->routeIs('pais.*') ? 'active' : '' }}" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                <i class="mdi mdi-database"></i> <span data-key="t-multi-level">Registro general</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ url('/pais') }}" class="nav-link  {{ request()->routeIs('pais.*') ? 'active' : '' }}" data-key="t-registro-paises"> Países </a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
    </div>
    <!-- Sidebar -->
