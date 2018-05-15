<li class="nav-item {{ active(['reportes.*'], 'start active open') }}">
    <a href="#" class="nav-link nav-toggle">
        <i class="fa fa-bar-chart"></i>
        <span class="title">Reportes</span>
        <span class="arrow {{ active(['reportes.*'], 'open') }}"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item {{ active(['reportes.index'], 'start active open') }}">
            <a href="{{ route('reportes.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-industry"></i>
                <span class="title">Inventario</span>
            </a>
        </li>
        <li class="nav-item {{ active(['reportes.grafica'], 'start active open') }}">
            <a href="{{ route('reportes.grafica') }}" class="nav-link nav-toggle">
                <i class="fa fa-industry"></i>
                <span class="title">Grafíca</span>
            </a>
        </li>
    </ul>
    
{{---
    <ul class="sub-menu">
        @permission('USER_UDEC')
        <li class="nav-item {{ active(['usersUdec.user.*'], 'start active open') }}">
            <a href="{{ route('usersUdec.index') }}" class="nav-link nav-toggle">
                <i class="fa fa-users"></i>
                <span class="title">Usuarios</span>
            </a>
        </li>
        @endpermission
        @permission('USER_UDEC_REGIS')
        <li class="nav-item {{ active(['usersUdec.user.*'], 'start active open') }}">
            <a href="{{ route('usersUdec.register') }}" class="nav-link nav-toggle">
                <i class="fa fa-user-plus"></i>
                <span class="title">Registrar Usuario</span>
            </a>
        </li>
        @endpermission
    </ul>--}}
</li>
