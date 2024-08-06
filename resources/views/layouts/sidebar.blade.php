<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{asset("admin-mcg")}}" class="sidebar-brand">
            <img alt="" src="{{asset("storage/images/brand.svg")}}" class="img-fluid p-4">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
{{--            <li class="nav-item nav-category">Main</li>--}}
{{--            <li class="nav-item {{ active_class(['admin-mcg/home']) }}">--}}
{{--                <a href="{{ url('/admin-mcg/home') }}" class="nav-link">--}}
{{--                    <i class="link-icon" data-feather="box"></i>--}}
{{--                    <span class="link-title">Home</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item {{ active_class(['admin-mcg/diputados']) }}">
                <a href="{{ url('admin-mcg/diputados') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Diputados</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/informel']) }}">
                <a href="{{ url('admin-mcg/informel') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Informes</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/comunicados']) }}">
                <a href="{{ url('admin-mcg/comunicados') }}" class="nav-link">
                    <i class="link-icon" data-feather="camera"></i>
                    <span class="link-title">Comunicados</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/iniciativa']) }}">
                <a href="{{ url('admin-mcg/iniciativas') }}" class="nav-link">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="link-title">Iniciativas</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/iniciativas/puntos/acuerdo']) }}">
                <a href="{{ url('admin-mcg/iniciativas/puntos/acuerdo') }}" class="nav-link">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="link-title">Puntos de acuerdo</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/agenda']) }}">
                <a href="{{ url('admin-mcg/agenda') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Agenda</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/sesion']) }}">
                <a href="{{ url('admin-mcg/sesion') }}" class="nav-link">
                    <i class="link-icon" data-feather="tv"></i>
                    <span class="link-title">Sesiones</span>
                </a>
            </li>
            <li class="nav-item {{ active_class(['admin-mcg/diputada']) }}">
                <a href="{{ url('admin-mcg/diputada') }}" class="nav-link">
                    <i class="link-icon" data-feather="user-plus"></i>
                    <span class="link-title">Diputadas</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
{{--<nav class="settings-sidebar">--}}
{{--    <div class="sidebar-body">--}}
{{--        <a href="#" class="settings-sidebar-toggler">--}}
{{--            <i data-feather="settings"></i>--}}
{{--        </a>--}}
{{--        <div class="theme-wrapper">--}}
{{--            <h6 class="text-muted mb-2">Light Version:</h6>--}}
{{--            <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo1/">--}}
{{--                <img src="{{ url('assets/images/screenshots/light.jpg') }}" alt="light version">--}}
{{--            </a>--}}
{{--            <h6 class="text-muted mb-2">Dark Version:</h6>--}}
{{--            <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo2/">--}}
{{--                <img src="{{ url('assets/images/screenshots/dark.jpg') }}" alt="light version">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
