@extends("pages.layouts.app")
@section("content")
         <div class="container-xl">
            <div class="py-24 py-md-32">
                <div class="col-12 col-lg-9 col-xl-10"><h4 class="fw-light mb-0">Comunicado {{$data->comunicado}}</h4>
                    <h1 class="display-4 fw-bold">
                        {{ Date::parse($data->fecha)->format('d') }} de
                        {{ ucfirst(Date::parse($data->fecha)->formatLocalized('%B'))}}
                        {{ Date::parse($data->fecha)->format('Y') }}
                    </h1>
                    <div class="tab-content" id="tabSesionContent">
                        <div class="tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="resumen-tab">
                            <div class="mb-24">
                                <div class="noticia bg-light rounded-4 overflow-hidden mb-24">
                                        <figure class="ratio ratio-16x9 mb-0" style="--bs-aspect-ratio: 66.25%;">
                                            @if(isset($data->foto->first()->path))
                                                <img src="{{asset($data->foto->first()->path)}}" alt="">
                                            @endif
                                        </figure>
                                </div>
                            </div>


                            <div >
                                <div class="p-32"><h4>{{$data->titulo}}</h4>
                                    <ul>
                                        @foreach($data->descripcionComunicado as $item)
                                            @if(strlen($item->bullets) > 1)
                                                <li>{{$item->bullets}}</li>
                                            @endif
                                        @endforeach
                                    </ul>
{{--                                    @dd($data->texto)--}}
                                    <p style="text-align: justify; white-space: pre-line;">{!! nl2br($data->texto)  !!}</p>
                                </div>
                            </div>
                            <div class="bg-lighter rounded-4 p-32"><h4>Galería</h4>
                                <div class="row g-3">
                                    @foreach($data->foto as $item)
                                        <div class="col-12 col-lg-4">
                                            <div class="rounded-4 overflow-hidden">
                                                <img src="{{asset($item->path)}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none px-48 py-24">
            <a id="backToTop"  class="btn btn-light d-flex align-items-center justify-content-center rounded-4 py-16">
                <i class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i>
                <span>Regresa a inicio</span>
            </a>
        </div>

@endsection
