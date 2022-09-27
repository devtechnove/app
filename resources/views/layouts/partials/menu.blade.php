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
            <a class="nav-link menu-link {{ request()->routeIs('pais.*') ? 'active' : '' }} {{ request()->routeIs('genero.*') ? 'active' : '' }} {{ request()->routeIs('estado.*') ? 'active' : '' }} {{ request()->routeIs('gradom.*') ? 'active' : '' }} {{ request()->routeIs('nacionalidad.*') ? 'active' : '' }}{{ request()->routeIs('gradoi.*') ? 'active' : '' }} {{ request()->routeIs('tipos.*') ? 'active' : '' }}{{ request()->routeIs('tipol.*') ? 'active' : '' }}" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                <i class="mdi mdi-database"></i> <span data-key="t-multi-level">Registro general</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ url('/pais') }}" class="nav-link  {{ request()->routeIs('pais.*') ? 'active' : '' }}" data-key="t-registro-paises"> Países </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/genero') }}" class="nav-link  {{ request()->routeIs('genero.*') ? 'active' : '' }}" data-key="t-registro-paises"> Género </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/estado') }}" class="nav-link  {{ request()->routeIs('estado.*') ? 'active' : '' }}" data-key="t-registro-Estado-Civil"> Estado Civil </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{ url('/gradom') }}" class="nav-link  {{ request()->routeIs('gradom.*') ? 'active' : '' }}" data-key="t-registro-Grado-Ministerial"> Grado Ministerial </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/nacionalidad') }}" class="nav-link  {{ request()->routeIs('nacionalidad.*') ? 'active' : '' }}" data-key="t-registro-Nacionalidad"> Nacionalidad </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/gradoi') }}" class="nav-link  {{ request()->routeIs('gradoi.*') ? 'active' : '' }}" data-key="t-registro-Grado-Instruccion"> Grado de Instrucción </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/tipos') }}" class="nav-link  {{ request()->routeIs('tipos.*') ? 'active' : '' }}" data-key="t-registro-Tipo-Sangre"> Tipo de sangre </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/tipol') }}" class="nav-link  {{ request()->routeIs('tipol.*') ? 'active' : '' }}" data-key="t-registro-Tipo-Sangre"> Tipo de local </a>
                    </li>

                </ul>
            </div>
        </li>

    </ul>
    </div>
    <!-- Sidebar -->
