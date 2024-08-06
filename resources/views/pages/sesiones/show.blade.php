@extends("pages.layouts.app")
@section("content")
    <div class="container-xl">
        <div class="container-xl">
            <div class="row gx-24">
                <div class="col-12 col-lg-3 col-xl-2 border-bottom border-light py-12">
                    <nav class="side-navbar nav" id="tabDiputado" role="tablist"><a class="nav-link rounded-4 active"
                                                                                    id="resumen-tab" data-bs-toggle="tab"
                                                                                    data-bs-target="#resumen" type="button"
                                                                                    role="tab" aria-controls="home"
                                                                                    aria-selected="true"><i
                                class="icon-resumen d-none d-lg-block"></i> <span>Resumen</span> </a><a
                            class="nav-link rounded-4" id="boletines-tab" data-bs-toggle="tab" data-bs-target="#boletines"
                            type="button" role="tab" aria-controls="contact" aria-selected="false"><i
                                class="icon-chat d-none d-lg-block"></i> <span>Boletines</span></a></nav>
                </div>
                <div class="col-12 col-lg-9 col-xl-10"><h4 class="fw-light mb-0">Sesión {{$data->results[0]->no_sesion}}</h4>
                    <h1 class="display-4 fw-bold">
                        {{ Date::parse($data->results[0]->fecha_sesion)->format('d') }} de
                        {{ ucfirst(Date::parse($data->results[0]->fecha_sesion)->formatLocalized('%B'))}}
                        {{ Date::parse($data->results[0]->fecha_sesion)->format('Y') }}
                    </h1>
                    <div class="tab-content" id="tabSesionContent">
                        <div class="tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="resumen-tab">
                            <div class="mb-24">
                                <div class="row align-items-stretch gx-24">
                                    <div class="col-12 col-lg-6 mb-24 mb-lg-0">
{{--                                        <div class="bg-dark ratio ratio-16x9 rounded-4"></div>--}}
                                        <div class="bg-dark ratio ratio-16x9 rounded-4" id="iframe-content">
                                            {!!$data->results[0]->transmision!!}
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="bg-lighter rounded-4 h-100 p-32"><h4>{{$data->results[0]->tipo_sesion}}</h4>
                                            <p>{{$data->results[0]->anfitriones->legislatura}} - {{$data->results[0]->periodo}}, {{$data->results[0]->anio}}
                                                </p>
                                            <div class="text-secondary my-4">
                                                <hr>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex bg-light rounded-3 p-16 me-16">
                                                    @if(isset($data->results[0]->fecha_hora_fin))
                                                        {{\Carbon\Carbon::createFromDate($data->results[0]->fecha_hora_fin)->diffAsCarbonInterval(\Carbon\Carbon::createFromDate($data->results[0]->fecha_hora_inicio))}}
                                                    @endif
                                                </div>
                                                <div class="d-flex bg-light rounded-3 p-16">{{$data->results[0]->total_asistencias}} Asistentes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-24">
                                <div class="bg-lighter rounded-4 p-32"><h4>Balance de la Sesión</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-4">{{$data->results[0]->iniciativas_aprobadas}} Iniciativas Aprobadas</div>
                                        <div class="col-12 col-md-4">{{$data->results[0]->iniciativas_turnados}} Iniciativas Turnadas</div>
                                        <div class="col-12 col-md-4">{{$data->results[0]->acuerdos}} Acuerdos</div>
                                        <div class="col-12 col-md-4">{{$data->results[0]->puntos_acuerdos_turnados}} puntos de Acuerdo Turnados</div>
{{--                                        <div class="col-12 col-md-4">6 Acuerdos</div>--}}
{{--                                        <div class="col-12 col-md-4">6 puntos de Acuerdo Turnados</div>--}}
                                    </div>
                                    <div class="text-secondary my-4">
                                        <hr>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end">
                                        @if(isset($data->results[0]->ordenDia))
                                        <a onclick="window.open('{{asset($data->results[0]->ordenDia)}}')" class="btn btn-outline-dark d-block rounded-4 py-16 px-24 fw-bold me-16">
                                            Orden del día (PDF)
                                        </a>
                                        @endif
                                        @if(isset($data->actasesion->path))
                                        <a onclick="window.open('{{asset($data->actasesion->path)}}')" class="btn btn-outline-dark d-block rounded-4 py-16 px-24 fw-bold me-16">
                                            Acta de la Sesión (PDF)
                                        </a>
                                        @endif
                                        @if(isset($data->estenografia->path))
                                        <a onclick="window.open('{{asset($data->estenografia->path)}}')" class="btn btn-outline-dark d-block rounded-4 py-16 px-24 fw-bold">
                                            Versión Estenográfica (PDF)
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mb-24">
                                <div class="row gx-24">
                                    <div class="col-12 col-lg-6 mb-24 mb-lg-0 d-flex">
                                        <div class="bg-lighter rounded-4 flex-grow-1">
                                            <div class="p-32"><h4>Comisiones activas</h4>
                                                <ul>
                                                    @if(isset($data->results[0]->comisiones))
                                                        @foreach($data->results[0]->comisiones as $item)
                                                            <li>{{$item}}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-24 mb-lg-0 d-flex">
                                        <div class="bg-dark rounded-4 d-flex flex-column flex-grow-1">
                                            <div class="p-32"><h4 class="mb-0 text-white">Boletines de Prensa</h4></div>
                                            <div class="p-2 pt-0 d-flex flex-grow-1">
                                                <div class="d-flex flex-column justify-content-between p-32">
                                                    <div id="slidesNoticiasIndicators"
                                                         class="carousel slide d-flex flex-column justify-content-between flex-grow-1"
                                                         data-bs-ride="true">
                                                        <div class="carousel-inner text-white">
                                                            <div class="carousel-item active">
                                                                <div><h4>Invita Rosario Elizalde a Feria del Aguacate y la
                                                                        trucha en Donato Guerra</h4>
                                                                    <p class="m-0">En presencia de la y los integrantes de
                                                                        la Jucopo, la diputada Mónica Álvarez dio por
                                                                        recibido el informe en tiempo y forma.</p></div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div><h4>Invita Rosario Elizalde a Feria del Aguacate y la
                                                                        trucha en Donato Guerra</h4>
                                                                    <p class="m-0">En presencia de la y los integrantes de
                                                                        la Jucopo, la diputada Mónica Álvarez dio por
                                                                        recibido el informe en tiempo y forma.</p></div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div><h4>Invita Rosario Elizalde a Feria del Aguacate y la
                                                                        trucha en Donato Guerra</h4>
                                                                    <p class="m-0">En presencia de la y los integrantes de
                                                                        la Jucopo, la diputada Mónica Álvarez dio por
                                                                        recibido el informe en tiempo y forma.</p></div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-indicators carousel-dots dots-light">
                                                            <button type="button" data-bs-target="#slidesNoticiasIndicators"
                                                                    data-bs-slide-to="0" class="active" aria-current="true"
                                                                    aria-label="Slide 1"></button>
                                                            <button type="button" data-bs-target="#slidesNoticiasIndicators"
                                                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                            <button type="button" data-bs-target="#slidesNoticiasIndicators"
                                                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid"><a
                                                            class="btn btn-light btn-lg rounded-4 fs-6 py-16">Ver todas las
                                                            Noticias</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-lighter rounded-4 p-32"><h4>Galería</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-lg-4">
                                        <div class="rounded-4 overflow-hidden">
                                            <img src=".././images/galeria-1.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="rounded-4 overflow-hidden">
                                            <img src=".././images/galeria-2.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="rounded-4 overflow-hidden">
                                            <img src=".././images/galeria-3.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="boletines" role="tabpanel" aria-labelledby="boletines-tab">
{{--                            <div class="mb-24">--}}
{{--                                <div class="comunicado-destacado ratio ratio-1x1 rounded-4 overflow-hidden"><img--}}
{{--                                        src=".././images/noticia-1.jpg" alt="" class="rounded-4">--}}
{{--                                    <div class="d-flex flex-column align-items-start justify-content-end p-32 col-lg-8 text-white">--}}
{{--                                        <h4>titulo</h4>--}}
{{--                                        <p>En presencia de la y los integrantes de la Jucopo, la diputada Mónica Álvarez dio--}}
{{--                                            por recibido el informe en tiempo y forma.</p><a--}}
{{--                                            class="btn btn-dark btn-lg rounded-4 fs-6 py-16">Abrir Comunicado</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            @if(isset($data->results[0]->comunicados))
                                @foreach($data->results[0]->comunicados as $item)
                                    <div class="comunicado bg-light rounded-4 overflow-hidden mb-24">
                                        <div class="row gx-0">
                                            <div class="col-12 col-lg-5">
                                                <figure class="ratio ratio-16x9 mb-0"><img
                                                        src=".././images/noticia-1.jpg"
                                                        alt="">
                                                </figure>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="p-32"><h4>{{$item->titulo}}</h4>
                                                    <p>
                                                        {{substr($item->texto, 0, 200)}}
                                                    </p>
                                                    <a href=""
                                                       class="btn btn-outline-dark btn-lg border-2 rounded-4 fs-6 py-16 px-32">Abrir
                                                        comunicado</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>.
        <div class="px-48 py-24">
            <a id="backToTop"
               class="btn btn-light d-flex align-items-center justify-content-center d-md-none rounded-4 py-16">
                <i class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a>
        </div>
    </div>
@endsection
