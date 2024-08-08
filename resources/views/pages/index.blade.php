<!doctype html>
<html lang="es">

<head>
    {{--    <meta charset="UTF-8">--}}
    {{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">--}}

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:description" content="Poder Legislativo del Estado de México"/>
{{--    <meta property="og:url" content="{{url()->current()}}"/>--}}
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{asset("storage/images/shield-lg.png")}}"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:image:width" content="1024"/>
    <meta property="og:image:height" content="683"/>
    <meta property="og:title" content="Poder Legislativo del Estado de México"/>
    <title>Poder Legislativo del Estado de México</title>
    <link rel="shortcut icon" href="https://legislacion.legislativoedomex.gob.mx/storage/favicon.svg">
    <script defer="defer" src="{{asset("js/app.js")}}"></script>
    <script defer="defer" src="{{asset("js/particles.js")}}"></script>
    <link href="{{asset("css/app.css")}}" rel="stylesheet">

{{--    <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>--}}
{{--    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=header&aut=legislativoedomex.gob.mx" type="text/javascript"></script>--}}
{{--    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=body&aut=legislativoedomex.gob.mx" type="text/javascript"></script>--}}
{{--    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=footer&aut=legislativoedomex.gob.mx" type="text/javascript"></script>--}}

</head>
<body class="home">
{{--<div class="escudo"><img id="escudo" src="./images/shield-lg.png"></div>--}}
<div class="escudo">
    <img id="escudo" src="{{asset("/storage/images/shield-lg.png")}}"></div>
<header>
    <nav class="navbar navbar-expand-xl">
        <div class="container-xl position-lg-relative d-flex align-items-center justify-content-between py-16 py-lg-0">
            <a class="navbar-brand d-flex align-items-center position-relative" href="{{asset("/")}}"><img
                    src={{asset("storage/images/brand.svg")}} alt=""> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="search-form w-100 px-40 d-none d-lg-flex align-items-center" action="{{route("search")}}"
                      method="GET" role="search"><input
                        class="form-control search-control h-52 border-0 ps-56 pe-32 rounded-4" type="search"
                        placeholder="Explora tu legislativo" aria-label="Search" name="tema"></form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#legislatura" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Legislatura</a>
                        <ul class="dropdown-menu">
                            <li class="{{ active_class(['diputadasydiputados']) }}">
                                <a class="dropdown-item" href="{{asset("diputadasydiputados")}}">
                                    Diputadas y diputados </a>
                            </li>
                            <li class="active_class">
                                <a class="dropdown-item" href="http://legislacion.legislativoedomex.gob.mx/dependencias"
                                   target="_blank" href="/legislatura">Dependencias</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#actividad" role="button"
                                                     data-bs-toggle="dropdown" aria-expanded="false">Actividad</a>
                        <ul class="dropdown-menu">
                            {{--                                                <li class="{{ active_class(['sesiones']) }}"><a class="dropdown-item" href="{{asset("sesiones")}}">Sesiones públicas</a></li>--}}
                            {{--                                                <li class="{{ active_class(['asuntos']) }}"><a class="dropdown-item" href="/asuntos">Asuntos</a></li>--}}
                            {{--                                                <li class="{{ active_class(['resoluciones']) }}"><a class="dropdown-item" href="/resoluciones">Resoluciones</a></li>--}}
                            <li class="{{ active_class(['recursos-documentales']) }}">
                                <a class="dropdown-item" href="{{asset("revista")}}">
                                    Recursos documentales
                                </a>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item"><a href="http://legislacion.legislativoedomex.gob.mx/transparencia"
                                            class="nav-link" haref="/transparencia">Transparencia</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div id="particle-container"></div>
    <div class="container-xl">
        <div class="border-bottom border-dark">
            <h1 class="display-6 fw-bold text-center">Poder Legislativo
            </h1>
            <h1 class="display-6 fw-bold text-center">¡El Poder de la gente!
            </h1>
        </div>
        <div class="py-24">
            <div class="row g-24">
                @foreach($comunicados as $key => $item)
                    @if($key == 5 || $key == 7)
                        @if($key == 5)
                            <div class="col-12 col-lg-4">
                                <div class="card-shadow-hover position-relative rounded-4 overflow-hidden h-100">
                                    <a href="https://indd.adobe.com/view/a2b612d7-6954-4f0f-999e-92bc5fb60322"
                                       style="color: black; text-decoration: none;" target="_blank">
                                        <figure class="mb-0 position-absolute h-100 w-100"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/banners/banner-gif.gif"
                                                alt="" class="position-absolute h-100 w-100"></figure>
{{--                                        <div class="position-absolute bottom-0 p-16 p-lg-24 text-white">--}}
{{--                                            <h4 class="text-dark">--}}
{{--                                                ¡Abrir!</h4>--}}
{{--                                        </div>--}}
                                    </a>
                                </div>
                            </div>

{{--                            <div class="col-12 col-lg-4">--}}
{{--                                <div class="card-shadow-hover position-relative rounded-4 overflow-hidden h-100">--}}
{{--                                    <a style="color: #ffffff; text-decoration: none;" target="_blank" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                                        <figure class="mb-0 position-absolute h-100 w-100"><img--}}
{{--                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/banners/banner-gif.gif"--}}
{{--                                                alt="" class="position-absolute h-100 w-100"></figure>--}}
{{--                                        <div class="position-absolute bottom-0 p-16 p-lg-24 text-white">--}}
{{--                                                                                    <h4>Abrir</h4>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <!-- Modal -->--}}
{{--                                    <div class="modal fade" id="exampleModal" tabindex="-1"--}}
{{--                                         aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                        <div class="modal-dialog modal-xg" style="opacity: .8; filter: alpha(opacity=80);">--}}
{{--                                            <div class="modal-content">--}}
{{--                                                <div class="modal-header">--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    <embed src="https://indd.adobe.com/view/a2b612d7-6954-4f0f-999e-92bc5fb60322"--}}
{{--                                                        frameborder="0" width="100%" height="600px">--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-footer">--}}
{{--                                                    <button type="button" class="btn btn-secondary"--}}
{{--                                                            data-bs-dismiss="modal">Cerrar--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        @endif
                        @if($key == 7)
                            <div class="col-12 col-lg-4">
                                <div class="card-shadow-hover position-relative rounded-4 overflow-hidden h-100">
                                    <a href="http://administracionyfinanzasplem.gob.mx/uas/"
                                       style="color: black; text-decoration: none;" target="_blank">
                                        <figure class="mb-0 position-absolute h-100 w-100"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/banners/BannerUAS_500x500_1.jpg"
                                                alt="" class="position-absolute h-100 w-100"></figure>
{{--                                        <div class="position-absolute bottom-0 p-16 p-lg-24 text-white">--}}
{{--                                            <h4 class="text-dark">--}}
{{--                                                ¡Abrir!</h4>--}}
{{--                                        </div>--}}
                                    </a>

                                </div>
                            </div>
                        @endif
                    @else

                        <div class="col-12 col-lg-4">
                            <a href="{{route("boletin.show", $item->id)}}" style="text-decoration: none">
                                <div class="card-shadow-hover rounded-4">
                                    <figure
                                        class="mb-0 rounded-top-4 overflow-hidden position-relative container-fluid">
                                        <img
                                            @if(isset($item->foto->first()->path))
                                                src="'storage/files/legislativoedomex/'{{asset($item->foto->first()->path)}}"
                                            @endif alt="" class="img-fluid">
                                        <span
                                            class="pill-fecha position-absolute start-16 top-16 rounded-pill px-16 py-8 lh-1">
                                      {{ Date::parse($item->fecha)->format('d') }} de
                                      {{ ucfirst(Date::parse($item->fecha)->formatLocalized('%B'))}},
                                      {{ Date::parse($item->fecha)->format('Y') }}
                                </span></figure>
                                    <div class="bg-white border border-top-0 rounded-bottom-4 p-16 p-lg-24">
                                        <h4>{{substr($item->titulo, 0, 75) }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endif
                @endforeach
            </div>
            <a href="{{route("boletin.index")}}"
               class="btn btn-outline-dark border-2 rounded-4 py-16 px-32 d-block mt-24">
                Ver más noticias
            </a>
        </div>
        <div class="py-24">
            <div class="flex align-items-center border-top border-bottom border-primary py-20 lh-1 my-24">
                <h2 class="text-primary text-center fs-16 m-0">CONOCE A TUS REPRESENTANTES LOCALES</h2>
            </div>
            <div class="row gx-24">
                <div class="col-12 col-lg-3 col-xl-2">
                    <nav
                        class="side-navbar nav border-bottom border-lg-0 border-light py-12 py-lg-32 px-24 px-lg-0 mx-n24 mx-lg-0"
                        id="tabDiputado" role="tablist"><a class="nav-link rounded-4 me-12 active" id="perfil-tab"
                                                           data-bs-toggle="tab" data-bs-target="#perfil" type="button"
                                                           role="tab"
                                                           aria-controls="home" aria-selected="true"><i
                                class="icon-perfil d-none d-lg-block"></i>
                            <span>Perfil</span> </a>
                        <a class="nav-link rounded-4 me-12" id="iniciativas-tab"
                           data-bs-toggle="tab" data-bs-target="#iniciativas" type="button"
                           role="tab"
                           aria-controls="profile" aria-selected="false"><i
                                class="icon-bulb d-none d-lg-block"></i> <span>Iniciativas</span> </a>
                        <a class="nav-link rounded-4" id="comunicados-tab" data-bs-toggle="tab"
                           data-bs-target="#comunicados" type="button" role="tab" aria-controls="contact"
                           aria-selected="false"><i class="icon-chat d-none d-lg-block"></i>
                            <span>Comunicados</span></a></nav>
                </div>
                <div class="col-12 col-lg-9 col-xl-10">
                    <div class="py-24 py-md-32">
                        <h4 class="fw-light mb-0">
                            @if($dip->integranteLegislatura->diputado->genero->genero == "Femenino")
                                Diputada
                            @else
                                Diputado
                            @endif
                        </h4>
                        <h1 class="fw-bold">{{$dip->integranteLegislatura->diputado->nombres}} {{$dip->integranteLegislatura->diputado->apaterno}} {{$dip->integranteLegislatura->diputado->amaterno}}</h1>
                        <div class="tab-content" id="tabDiputadoContent">
                            <div class="tab-pane fade show active" id="perfil" role="tabpanel"
                                 aria-labelledby="perfil-tab">
                                <div class="row align-items-stretch gx-24">
                                    <div class="col-12 col-lg-7 col-xl-8 mb-24 mb-lg-0">
                                        <div
                                            class="card-diputado d-flex flex-column flex-lg-row rounded-4 bg-lighter overflow-hidden">
                                            <div class="col-12 col-lg-5">
                                                <div class="position-relative h-100 w-100">
                                                    <div class="ratio ratio-1x1"><img
                                                            @if(isset($dip->integranteLegislatura->diputado->foto->path))
                                                            src="'storage/files/legislativoedomex/'{{asset($dip->integranteLegislatura->diputado->foto->path)}}"  @endif
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="position-absolute top-0 end-0 p-16">
                                                        {{$dip->integranteLegislatura->partido->siglas}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="p-16 p-lg-32">
                                                    <p class="mb-0">
                                                        Distrito {{$dip->integranteLegislatura->distrito->distrito}}</p>
                                                    <p class="fw-semibold">
                                                        @if($dip->integranteLegislatura->distrito->municipio)
                                                            {{$dip->integranteLegislatura->distrito->municipio->cabecera}}
                                                        @endif
                                                    </p>
                                                    <p>{{$dip->integranteLegislatura->diputado->descripcion}}</p>
                                                    <ul class="fs-sm">
                                                        <li>
                                                            @if(!is_null($actividadReciente))
                                                                Última Actividad en el
                                                                Recinto Legislativo {{\Carbon\Carbon::parse($actividadReciente->fecha_hora)->diffForHumans()}}
                                                            @else
                                                                Sin actividad reciente
                                                            @endif

                                                        </li>
                                                        <li>
                                                            @if(!is_null(8))
                                                                Próxima actividad en el
                                                                Recinto Legislativo
                                                                @if(isset($actividadProxima->fecha_hora))
                                                                    {{\Carbon\Carbon::parse($actividadProxima->fecha_hora)->diffForHumans()}}
                                                                @endif
                                                            @else
                                                                Sin actividad próxima
                                                            @endif
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 col-xl-4">
                                        <div class="bg-lighter rounded-4 h-100 p-16 p-lg-24">
                                            <div class="d-flex flex-column flex-md-row flex-lg-column">
                                                <div class="mb-24 mb-md-0 mb-lg-24 me-32">
                                                    <h4>Contáctame</h4>
                                                    <nav class="d-flex icons-contacto-diputado mb-lg-4">
                                                        @if(!is_null($dip->integranteLegislatura->diputado->email) && strlen($dip->integranteLegislatura->diputado->email) > 1)
                                                            <a href="mailto:{{$dip->integranteLegislatura->diputado->email}}"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-email fs-24"></i>
                                                            </a>

                                                        @endif
                                                        @if(!is_null($dip->integranteLegislatura->diputado->ubicacion) && strlen($dip->integranteLegislatura->diputado->ubicacion) > 1)
                                                            <a href="{{$dip->integranteLegislatura->diputado->ubicacion}}"
                                                               target="_blank"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-location fs-24"></i>
                                                            </a>
                                                        @endif
                                                        @if(!is_null($dip->integranteLegislatura->diputado->telefono) && strlen($dip->integranteLegislatura->diputado->telefono) > 1)
                                                            <a href="tel:{{$dip->integranteLegislatura->diputado->telefono}}"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-telephone fs-24"></i>
                                                            </a>
                                                        @endif

                                                    </nav>
                                                </div>
                                                <div>
                                                    <h4>Sígueme</h4>
                                                    <nav class="d-flex icons-contacto-diputado">
                                                        @if(!is_null($dip->integranteLegislatura->diputado->facebook) && strlen($dip->integranteLegislatura->diputado->facebook) > 1)
                                                            <a href="https://facebook.com/{{$dip->integranteLegislatura->diputado->facebook}}"
                                                               target="_blank"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-facebook">
                                                                </i>
                                                            </a>
                                                        @endif
                                                        @if(!is_null($dip->integranteLegislatura->diputado->twitter) && strlen($dip->integranteLegislatura->diputado->twitter) > 1)
                                                            <a href="https://twitter.com/{{$dip->integranteLegislatura->diputado->twitter}}"
                                                               target="_blank"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-twitter">
                                                                </i>
                                                            </a>
                                                        @endif
                                                        @if(!is_null($dip->integranteLegislatura->diputado->instagram) && strlen($dip->integranteLegislatura->diputado->instagram) > 1)
                                                            <a href="https://instagram.com/{{$dip->integranteLegislatura->instagram}}"
                                                               target="_blank"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-instagram">
                                                                </i>
                                                            </a>
                                                        @endif
                                                        @if(!is_null($dip->integranteLegislatura->diputado->link_web) && strlen($dip->integranteLegislatura->diputado->link_web) > 1)
                                                            <a href="{{$dip->integranteLegislatura->link_web}}"
                                                               class="d-flex align-items-center justify-content-center rounded-3">
                                                                <i class="icon-www">
                                                                </i>
                                                            </a>
                                                        @endif
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($iniciativa)
                                <div class="tab-pane fade" id="iniciativas" role="tabpanel"
                                     aria-labelledby="iniciativas-tab">
                                    <div
                                        class="card-iniciativa position-relative bg-lighter rounded-4 p-16 pt-md-40 p-md-32 mb-24">
                                        <div class="text-right">
                                            <p>{{ Date::parse($iniciativa->fecha_presentacion)->format('d') }} de
                                                {{ ucfirst(Date::parse($iniciativa->fecha_presentacion)->formatLocalized('%B'))}}
                                                {{ Date::parse($iniciativa->fecha_presentacion)->format('Y') }}</p>
                                        </div>
                                        <div class="list-diputados d-flex flex-wrap">
                                            @foreach($iniciativa->autor as $item)
                                                <div
                                                    class="d-flex align-items-center bg-light py-12 px-16 rounded-4 me-16 mb-16">
                                                    <figure class="m-0 me-lg-12"><img
                                                            src="{{asset($item->foto_autor)}}"
                                                            alt="" class="rounded-circle border border-primary">
                                                    </figure>
                                                    <p class="d-none d-lg-block mb-0 fw-semibold">{{$item->name}}</p>
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="bg-light p-16 p-lg-32 rounded-4">
                                            <div class="fs-lg-18">
                                                <p>{{$iniciativa->iniciativa}}</p>
                                            </div>

                                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                                @foreach($iniciativa->comision as $item)
                                                    <div class="overflow d-flex align-items-center mb-16 mb-lg-0 w-100">
                                                        <div class="icon-text-card d-flex align-items-center azul">
                                                            <div class="icon"><img
                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAASFBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////8FevL4AAAAF3RSTlMA8UMUCPrbZjOYqOdZ0CDFtaGITm4oeYLSbXYAAAKASURBVBgZ7cFZdptAAEXB1yPQzOPd/07TEISRrGOf5DNxlX78+B842zTW6W/ZIZCFwepv+MQlef0x33LTen3Pr6XTZSAz47YlQzbo4srV6zM7BKBdvA4N2eiUuZGs0cEvLRAGqxcVp7bTLgKVThUQtetaTpWeVFyik1QCtdfJ10ApyUUuo25mMjOkSJYkLcCkywQskhJZTIMhm/WhBfpO8hPZKk3ArMsMTNJKNknqeqDVZQVqp10CNqkCrC4WqKQNSNq5Glj1MAOTDiWQpA0odCmATUpAqUMFzHoogE2HDhikGeh16YFZGoBOhw0o9DADSYcZGCVvgFmnBjBeGoFZhwRYPbgAwSrzLVBImgBjdbAGmCQVQPTKygDB6TIApvAqe8A4Sa4mS9Y5m8hqJ8kZoC/lCwMkfVgDWTDsNu3KwE0otdvYmUAWVt00gYek38qai7H6LfEQGj2xNYcw6aEbOY1OD1PgUFu98MUQ637qdNMtY9+PS6ebburrOBRe/yA7DW3sx8brpivnuex045uxj+0wWT0rak6hcjr4Zqw51GPjdXCV4VQX+rC23JhGkl9qbmLhJRWGm7bTyRqebVpbXrSrNp7VVofVkMVl9b5rBnbJsAv9OE1jH9iZxG5oOu/XJZKZVZmPQFh0spFTLJwOroicotVpCUD0kjYgWF1cZBcW3SyBXXS62ABskjdAoZuSrC71pKzJSt0UgPFqgF53CahXvVhrIOmuBRoloNFNSTbrk5ms1E0DjGqBVN20wKg3RqCtbhLQyvBZ6PRGF/isFm8MemvgDfFGobcW3lD5ogem4q0J6MsXetXzpV7fiXwp6juRL0V9pym+1OjHj3/TL2qnWfdFhM29AAAAAElFTkSuQmCC">
                                                            </div>
                                                            <div class="text-nowrap">
                                                                <p><strong>Turnada a:</strong></p>
                                                                <p>{{$item->comision->nombre}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            {{--                                            <a href=""--}}
                                            {{--                                               class="btn btn-outline-darker border-2 rounded-4 text-nowrap py-16 px-32 flex-grow-1 flex-md-grow-0">Abrir--}}
                                            {{--                                                iniciativa</a>--}}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($comunicado)
                                <div class="tab-pane fade" id="comunicados" role="tabpanel"
                                     aria-labelledby="comunicados-tab">
                                    <div
                                        class="comunicado-destacado bg-darker position-relative rounded-4 overflow-hidden">
                                        <figure class="ratio ratio-16x9 mb-0"><img
                                                @if($comunicado->foto->first()->path)src="{{asset($comunicado->foto->first()->path)}}"
                                                @endif alt="">
                                        </figure>
                                        <div
                                            class="d-flex flex-column align-items-stretch align-items-md-start justify-content-end p-16 p-lg-24 pt-0 col-lg-8 text-white position-lg-absolute start-0 bottom-0">
                                            <h4>{{$comunicado->titulo}}</h4>
                                            <a href="{{route("boletin.show", $comunicado->id)}}"
                                               class="btn btn-dark rounded-4 py-16 px-32">Abrir Comunicado</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route("diputadasydiputados.show", $dip->integranteLegislatura->id)}}"
               class="btn btn-outline-dark border-2 rounded-4 py-16 px-32 d-block">
                Conoce más de {{$dip->integranteLegislatura->diputado->nombres}}
            </a>
            <a href="{{asset("diputadasydiputados")}}" class="btn btn-link py-16 px-32 d-block mt-24">
                Descubre a otros diputados
            </a>
        </div>
        <div class="py-24">
            <div class="flex align-items-center border-top border-bottom border-primary py-20 lh-1 my-24">
                <h2 class="text-primary text-center fs-16 m-0">AGENDA PARLAMENTARIA</h2>
            </div>
            @if($transmision->fecha_hora_inicio < $sesion->agenda->agenda->fecha_hora_inicio)
                <h4 class="fw-light mb-0">Sesión {{$sesion->sesion}}</h4>
                <h1 class="display-4 fw-bold">
                    {{ Date::parse($sesion->fecha)->format('d') }} de
                    {{ ucfirst(Date::parse($sesion->fecha)->formatLocalized('%B'))}}
                    {{ Date::parse($sesion->fecha)->format('Y') }}
                </h1>
                <div class="row align-items-stretch gx-24">
                    <div class="col-12 col-lg-5 mb-24 mb-lg-0" id="iframe-content">
                        {!!$sesion->agenda->agenda->liga!!}
                    </div>
                    <div class="col-12 col-lg-7">
                        <div
                            class="bg-lighter rounded-4 h-100 p-24 p-lg-32 position-relative d-flex flex-column justify-content-lg-between">

                            @if(isset($sesion->agenda->agenda->fecha_hora_fin) && $sesion->agenda->agenda->fecha_hora_fin == null && !is_null($sesion->agenda->agenda->fecha_hora_inicio))
                                <span
                                    class="pill-live position-lg-absolute d-inline-flex align-items-center top-lg-16 end-lg-16 rounded-pill px-16 py-8 lh-1 mb-24 mb-lg-0 align-self-start">
                                <span class="text-uppercase fw-bold">En vivo</span>
                                <i class="ms-4"></i>
                            </span>
                            @endif

                            <div>
                                <h4>{{$sesion->tipsesion->valor}}</h4>
                                <p>{{$sesion->legislatura->numero}} {{$sesion->asamblea->valor}}
                                    - {{$sesion->periodo->valor}}
                                    , {{$sesion->anio->valor}}</p>
                            </div>
                            <div class="text-secondary mt-auto mb-4">
                                <hr>
                            </div>
                            <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                <div class="d-flex align-items-center mb-16 mb-lg-0">
                                    <div class="d-flex align-items-center bg-light rounded-3 p-16 me-16"><i
                                            class="me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                                <path
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                        </i><span>
                                        @if(isset($sesion->agenda->agenda->fecha_hora_fin))
                                                {{\Carbon\Carbon::createFromDate($sesion->agenda->agenda->fecha_hora_fin)->diffAsCarbonInterval(\Carbon\Carbon::createFromDate($sesion->agenda->agenda->fecha_hora_inicio))}}
                                            @endif
                                    </span>
                                    </div>
                                    @isset($sesion->asistencia)
                                        <div class="d-flex bg-light rounded-3 p-16 me-16"><i class="me-4">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                                </svg>
                                            </i>
                                            <span>48 <span
                                                    class="d-none d-sm-inline">Asistentes</span></span>
                                        </div>
                                    @endisset

                                </div>
                                @if($sesion->path_orden)
                                    <a onclick="window.open('{{asset($sesion->path_orden)}}')"
                                       class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block flex-grow-1">
                                        Orden del día (PDF)
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="display-4 fw-bold">
                    {{ Date::parse($transmision->fecha_hora)->format('d') }} de
                    {{ ucfirst(Date::parse($transmision->fecha_hora)->formatLocalized('%B'))}}
                    {{ Date::parse($transmision->fecha_hora)->format('Y') }}
                </h1>
                <div class="row align-items-stretch gx-24">
                    <div class="col-12 col-lg-5 mb-24 mb-lg-0" id="iframe-content">
                        {!!$transmision->liga!!}
                    </div>
                    <div class="col-12 col-lg-7">
                        <div
                            class="bg-lighter rounded-4 h-100 p-24 p-lg-32 position-relative d-flex flex-column justify-content-lg-between">

                            @if(isset($transmision->fecha_hora_fin) && $transmision->fecha_hora_fin == null && !is_null($transmision->fecha_hora_inicio))
                                <span
                                    class="pill-live position-lg-absolute d-inline-flex align-items-center top-lg-16 end-lg-16 rounded-pill px-16 py-8 lh-1 mb-24 mb-lg-0 align-self-start">
                                <span class="text-uppercase fw-bold">En vivo</span>
                                <i class="ms-4"></i>
                            </span>
                            @endif

                            <div>
                                <h4>{{$transmision->descripcion}}</h4>
                                {{--                                <p>{{$sesion->legislatura->numero}} {{$sesion->asamblea->valor}}--}}
                                {{--                                    - {{$sesion->periodo->valor}}--}}
                                {{--                                    , {{$sesion->anio->valor}}</p>--}}
                            </div>
                            <div class="text-secondary mt-auto mb-4">
                                <hr>
                            </div>
                            <div class="d-flex flex-column flex-lg-row align-items-lg-center">
                                <div class="d-flex align-items-center mb-16 mb-lg-0">
                                    <div class="d-flex align-items-center bg-light rounded-3 p-16 me-16"><i
                                            class="me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                                <path
                                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                        </i><span>
                                        @if(isset($transmision->fecha_hora_fin))
                                                {{\Carbon\Carbon::createFromDate($transmision->fecha_hora_fin)->diffAsCarbonInterval(\Carbon\Carbon::createFromDate($transmision->fecha_hora_inicio))}}
                                            @endif
                                    </span>
                                    </div>
                                    @isset($sesion->asistencia)
                                        <div class="d-flex bg-light rounded-3 p-16 me-16"><i class="me-4">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                                </svg>
                                            </i>
                                            <span>48 <span
                                                    class="d-none d-sm-inline">Asistentes</span></span>
                                        </div>
                                    @endisset

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div>
                        @foreach($actProxima as $item)
                            <div class="evento-agenda-parlamentaria evento-proximo py-24 border-bottom">
    <span class="fecha d-flex align-items-center justify-content-center position-relative"
          style="background-color:  #e5e8e8; border-radius: 15px; border-bottom: 5px solid #c3c5c9;">
            <div
                class="d-flex flex-column align-items-center justify-content-center rounded-3 position-relative">
                <span
                    class="d-block fs-24 fw-semibold lh-1">{{ Date::parse($item->fecha_hora)->format('d') }}</span> <span
                    class="d-block fs-13">{{ ucfirst(Date::parse($item->fecha_hora)->formatLocalized('%B'))}}</span></div>
        </span>
                                <div class="position-relative d-lg-flex align-items-lg-end">
                                    <h2 class="fs-13 fs-lg-16 mb-lg-4">{{$item->descripcion}}</h2>
                                    <div>
                                <span
                                    class="pill-sesion d-inline-flex align-items-center position-lg-absolute top-lg-100 end-lg-0 rounded-pill px-16 py-8 lh-1">Próxima</span>
                                    </div>
                                </div>
                                <div class="tipo-horario-lugar d-lg-flex align-items-lg-start mt-lg-4">
                                    {{--                            <h4 class="fs-13 text-primary m-0 me-4">Sesión Plenaria</h4>--}}
                                    <p class="fs-13 m-0">
                                    <p class="fs-13 m-0">{{ ucfirst(Date::parse($item->fecha_hora)->translatedFormat('l')) }}  {{ ucfirst(Date::parse($item->fecha_hora)->translatedFormat('h:i A')) }}
                                        - {{$item->sedes->sede}}</p>
                                </div>
                            </div>
                        @endforeach
                        @foreach($actRecientes as $item)

                            <div class="evento-agenda-parlamentaria evento-pasado py-24 border-bottom"><span
                                    class="fecha d-flex align-items-center justify-content-center position-relative"
                                    style="background-color:  #e5e8e8; border-radius: 15px; border-bottom: 5px solid #c3c5c9;">

            <div class="d-flex flex-column align-items-center justify-content-center rounded-3 position-relative">
                <span class="d-block fs-24 fw-semibold lh-1">{{ Date::parse($item->fecha_hora)->format('d') }}</span>
                <span
                    class="d-block fs-13">{{ ucfirst(Date::parse($item->fecha_hora)->formatLocalized('%B'))}}</span></div>
                </span>
                                <div class="position-relative d-lg-flex align-items-lg-end">
                                    <h2 class="fs-13 fs-lg-16 mb-lg-4 ">{{$item->descripcion}}</h2>
                                    <div><span
                                            class="pill-sesion d-inline-flex align-items-center position-lg-absolute top-lg-100 end-lg-0 rounded-pill px-16 py-8 lh-1">Anterior</span>
                                    </div>
                                </div>
                                <div class="tipo-horario-lugar d-lg-flex align-items-lg-start mt-lg-4">

                                    {{--                            <h4 class="fs-13 text-primary m-0 me-4">Sesión Plenaria</h4>--}}
                                    <p class="fs-13 m-0">{{ ucfirst(Date::parse($item->fecha_hora)->translatedFormat('l')) }} {{ ucfirst(Date::parse($item->fecha_hora)->translatedFormat('h:i A')) }}
                                        - {{$item->sedes->sede}}</p>
                                </div>

                            </div>

                        @endforeach
                    </div>
                    <a href="{{asset("sesiones")}}" class="btn btn-outline-dark border-2 rounded-4 py-16 px-32 d-block">
                        Ver todas las sesiones</a>
                </div>
                <div class="py-24">
                    <div class="row g-24">
                        <div class="flex align-items-center border-top border-bottom border-primary py-20 lh-1 my-24">
                            <h2 class="text-primary text-center fs-16 m-0">INFORMACIÓN DE INTERÉS</h2>
                        </div>
                        @foreach($banners as $key => $item)
                            <div class="col-12 col-lg-4">
                                <a href="{{asset($item->url)}} " target="_blank" style="text-decoration: none">
                                    <div class="card-shadow-hover rounded-4">
                                        <figure
                                            class="mb-0 rounded-top-4 overflow-hidden position-relative container-fluid">
                                            <img @if(isset($item->foto->path)) src="{{asset($item->foto->path)}}"
                                                 @endif  alt="" class="img-fluid" width="100%">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-md-none px-48 py-24"><a id="backToTop"
                                                      class="btn btn-light d-flex align-items-center justify-content-center rounded-4 py-16"><i
                            class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a></div>
        </div>
    </div>
</main>

<footer>
    <div class="bg-lighter bg-opacity-50 mt-60 pt-60 pb-40 pb-lg-60 position-relative">
        <div class="position-absolute top-0 start-50 t-50n"><img src="{{asset("/storage/images/brand.svg")}}" alt=""
                                                                 class="w-240">
        </div>
        <div class="container-xl">
            <div class="d-flex flex-column flex-lg-row align-items-center">
                <div class="col-12 col-lg-6 mb-16 mb-lg-0">
                    <h4 class="text-center fs-16">Poder Legislativo del Estado de México</h4>
                    <nav
                        class="d-flex align-items-center justify-content-center flex-wrap text-nowrap fs-12 nav-footer">
                        <a href="http://legislacion.legislativoedomex.gob.mx/avisosdeprivacidad" target="_blank">Aviso
                            de
                            Privacidad</a>
                        <a href="http://legislacion.legislativoedomex.gob.mx/transparencia" target="_blank">Transparencia</a>
                        <a href="http://legislacion.legislativoedomex.gob.mx/dependencias">Dependencias</a>
                    </nav>
                </div>
                <div class="col-12 col-lg-3 mb-16 mb-lg-0">
                    <nav class="d-flex justify-content-center justify-content-lg-end social-icons">
                        <a href="http://fb.me/legismex" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark me-16">
                            <i class="icon-facebook-fill"></i>
                        </a>
                        <a href="http://twitter.com/legismex" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark me-16">
                            <i class="icon-twitter-fill"></i>
                        </a>
                        <a href="http://instagram.com/legismex" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark me-16">
                            <i class="icon-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC9kqSF0ZBUhSRp4cyWL_oAA" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark">
                            <i class="icon-youtube"></i>
                        </a>
                    </nav>
                </div>
                <div class="col-12 col-lg-3 fs-12 text-center text-lg-start order-lg-first lh-sm">
                    <p class="mb-8">Plaza Hidalgo s/n, Col. Centro<br>Toluca de Lerdo, Estado de México</p>
                    <p class="mb-0">Conmutador (722) 279-6400</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script type="text/javascript">
    const iframe_cont = document.querySelector("iframe");
    iframe_cont.style.cssText = 'width: 100%!important;height: 28vh!important;';
</script>
</html>
