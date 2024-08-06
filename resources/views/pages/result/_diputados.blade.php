<div style="padding: 10px 20px; background:linear-gradient( 40deg, rgb(255,255,255,1.00) 0%, rgb(245,245,245,1.00) 100% ); width: 200%; max-width: 1000px; margin: 10px; float: left; border: rgb(200,200,200) solid 1px; border-radius: 10px;">
    <h2>Diputadas/os</h2>
    @foreach($modelSearchResults as $item)
        <div class="mb-24">
            <div class="row align-items-stretch gx-24">
                <div class="col-12 col-lg-7 col-xl-8 mb-24 mb-lg-0">
                    <div
                        class="card-diputado d-flex flex-column flex-lg-row rounded-4 bg-lighter overflow-hidden">
                        <div class="col-12 col-lg-5">
                            <div class="position-relative h-100 w-100">
                                <div class="ratio ratio-1x1"><img
                                        src="{{asset($item->searchable->foto->path)}}" class="img-fluid">
                                </div>

                                <div
                                    class="position-absolute top-0 end-0 p-16">{{$item->searchable->integranteLegislatura->partido->siglas}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="p-16 p-lg-32"><p class="mb-0">
                                    Distrito {{$item->searchable->integranteLegislatura->distrito->distrito}}</p>
                                <p class="fw-semibold">
                                    @if($item->searchable->integranteLegislatura->distrito->municipio)
                                        {{$item->searchable->integranteLegislatura->distrito->municipio->cabecera}}
                                    @endif
                                </p>
                                <p align="justify">
                                    {{$item->searchable->descripcion}}
                                    {{--                                {{asset($data->foto->path)}}--}}
                                </p>
                                <ul class="fs-sm">
                                    <li>Última atividad pública hace 2 horas</li>
                                    <li>Próxima mañana</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4">
                    <div class="bg-lighter rounded-4 h-100 p-16 p-lg-24">
                        <div class="d-flex flex-column flex-md-row flex-lg-column">
                            <div class="mb-24 mb-md-0 mb-lg-24 me-32"><h4>Contáctame</h4>
                                <nav class="d-flex icons-contacto-diputado mb-lg-4"><a href=""
                                                                                       class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-email fs-24"></i> </a><a href=""
                                                                                 class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-location fs-24"></i> </a><a href=""
                                                                                    class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-telephone fs-24"></i></a></nav>
                            </div>
                            <div><h4>Sígueme</h4>
                                <nav class="d-flex icons-contacto-diputado"><a href=""
                                                                               class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-facebook"></i> </a><a href=""
                                                                              class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-twitter"></i> </a><a href=""
                                                                             class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-instagram"></i> </a><a href=""
                                                                               class="d-flex align-items-center justify-content-center rounded-3"><i
                                            class="icon-www"></i></a></nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
