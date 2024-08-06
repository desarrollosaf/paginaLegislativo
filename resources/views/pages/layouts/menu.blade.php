<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="search-form w-100 px-40 d-none d-lg-flex align-items-center" role="search" action="{{route("search")}}"
          method="GET"><input
            class="form-control search-control h-52 border-0 ps-56 pe-32 rounded-4"
            value="@isset($searchterm){{$searchterm}}@endisset" name="tema" type="search"
            placeholder="Explora tu legislativo" aria-label="Search"></form>
    <ul class="navbar-nav">
        <li class="nav-item dropdown"><a class="nav-link {{ active_class_menu(['diputadasydiputados']) }}"
                                         href="#legislatura" role="button"
                                         data-bs-toggle="dropdown" aria-expanded="false">Legislatura</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{asset("diputadasydiputados")}}">Diputadas y
                        diputados </a></li>
                <li><a href="http://legislacion.legislativoedomex.gob.mx/dependencias" target="_blank"
                       class="dropdown-item" href="/legislatura">Dependencias</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link {{ active_class_menu(['revista']) }}"
                                         href="#actividad" role="button"
                                         data-bs-toggle="dropdown" aria-expanded="false">Actividad</a>
            <ul class="dropdown-menu">
                {{--                            <li class="{{ active_class(['sesiones']) }}"><a class="dropdown-item" href="{{asset("sesiones")}}">Sesiones públicas</a></li>--}}
                {{--                            <li class="{{ active_class(['asuntos']) }}"><a class="dropdown-item" href="/asuntos">Asuntos</a></li>--}}
                {{--                            <li class="{{ active_class(['resoluciones']) }}"><a class="dropdown-item" href="/resoluciones">Resoluciones</a></li>--}}
                <li class="{{ active_class(['recursos-documentales']) }}"><a class="dropdown-item"
                                                                             href="{{asset("revista")}}">Recursos
                        documentales</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="http://legislacion.legislativoedomex.gob.mx/transparencia"
                                class="nav-link" haref="/transparencia">Transparencia</a></li>
    </ul>
</div>
