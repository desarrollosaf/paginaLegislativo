@extends("pages.layouts.app")
@section("content")
    <div class="container-xl">
        <div class="py-24 py-md-32">
            <h1 class="fw-bold">Boletines</h1>
{{--            <div class="comunicado bg-light rounded-4 overflow-hidden mb-24 mt-2">--}}
{{--                <div class="row gx-0">--}}
{{--                    <div class="col-12 col-lg-5">--}}
{{--                        <figure class="ratio ratio-16x9 mb-0"><img src="{{asset($data->first()->foto->last()->path)}}"--}}
{{--                                                                   alt="">--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-lg-7">--}}
{{--                        <div class="p-32">--}}
{{--                            <h4>--}}
{{--                                {{$data->first()->titulo}}--}}
{{--                            </h4>--}}
{{--                            <p>{{substr($data->first()->texto, 0, 150) }}</p>--}}
{{--                            <a href="{{route("boletin.show", $data->first()->id)}}"--}}
{{--                               class="btn btn-outline-dark btn-lg border-2 rounded-4 fs-6 py-16 px-32">--}}
{{--                                Abrir comunicado--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="mb-24">
                <div class="noticia-destacada bg-darker position-relative rounded-4 overflow-hidden">
                    <figure class="ratio ratio-16x9 mb-0" style="--bs-aspect-ratio: 66.25%;">
                        <img src="{{asset($data->first()->foto->last()->path)}}"
                            alt="">
                    </figure>
                    <div class="d-flex flex-column align-items-stretch align-items-md-start justify-content-end p-16 p-lg-24 pt-0 col-lg-8 text-white position-lg-absolute start-0 bottom-0">
                        <h4>{{$data->first()->titulo}}</h4>
                        <a href="{{route("boletin.show", $data->first()->id)}}" class="btn btn-dark rounded-4 py-16 px-32">Abrir Comunicado</a>
                    </div>
                </div>
            </div>
            @php
                unset($data[0])
            @endphp
            <div class="py-24">
                <div class="row g-24">
                    @foreach($data as $key => $item)
                        <div class="col-12 col-lg-4">
                            <a href="{{route("boletin.show", $item->id)}}" style="text-decoration: none">
                                <div class="card-shadow-hover rounded-4">
                                    <figure class="mb-0 rounded-top-4 overflow-hidden position-relative">
                                        <img
                                            @if(isset($item->foto->last()->path))
                                                src="{{asset($item->foto->last()->path)}}"
                                            @endif
                                            alt="" class="img-fluid">
                                        <span
                                            class="pill-fecha position-absolute start-16 top-16 rounded-pill px-16 py-8 lh-1">
                                      {{ Date::parse($item->fecha)->format('d') }} de
                                      {{ ucfirst(Date::parse($item->fecha)->formatLocalized('%B'))}},
                                      {{ Date::parse($item->fecha)->format('Y') }}
                                </span></figure>

                                    <div class="bg-white border border-top-0 rounded-bottom-4 p-16 p-lg-24">
                                        <h4>{{substr($item->titulo, 0, 90)}} @if(strlen($item->titulo) > 90)...@endif</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $data->links() }}
        </div>
    </div>
    <div class="d-md-none px-48 py-24"><a id="backToTop"
                                          class="btn btn-light d-flex align-items-center justify-content-center rounded-4 py-16"><i
                class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a></div>
@endsection
