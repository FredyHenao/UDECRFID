<div class="page-sidebar navbar-collapse collapse">
    {{-- BEGIN SIDEBAR MENU --}}
    <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="true" data-auto-scroll="true"
        data-slide-speed="200">
        {{-- HOME Y COMPONENTES --}}
        @include('themes.menus.home-menu')
        {{-- COMPONENTES --}}
        @permission('MASTER_ELEMENTS')
        @include('themes.menus.elementos-menu')
        @endpermission
        {{-- USUARIOS --}}
        @permission('MASTER_USERS')
        @include('themes.menus.user-menu')
        @endpermission
        {{-- PERMISOS DE USUARIOS --}}
        @permission('MASTER_PERMISSIOM')
        @include('themes.menus.permisos-menu')
        @endpermission
        {{-- USUARIOS UDEC --}}
        @permission('MASTER_USER_UDEC')
        @include('themes.menus.users-udec-menu')
        @endpermission
        {{--REPORTES--}}
        @include('themes.menus.reportes-menu')
        
    </ul>
    {{-- BEGIN SIDEBAR MENU --}}
</div>