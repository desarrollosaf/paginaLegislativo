@extends('pages.layouts.app')
@section('content')
    <div class="container-xl">
        <h1 class="fw-bold">Sesiones Públicas</h1>
        <div class="sesiones-publicas row g-4">
            @foreach($sesiones->results as $sesion => $item)
{{--                @dd($item->fecha_sesion)--}}
                <div class="col-12 col-lg-3">
                    <div class="d-flex flex-column border rounded-4 p-16">
                        <div class="d-flex align-items-center justify-content-between border-bottom pb-2"><span
                                class="d-block">
                                {{ Date::parse($item->fecha_sesion)->format('d') }} de
                                {{ ucfirst(Date::parse($item->fecha_sesion)->formatLocalized('%B'))}}
                                {{ Date::parse($item->fecha_sesion)->format('Y') }}
                            </span>
                            @if($sesion == 0 )
                                <span class="d-block bg-purple text-white rounded-2 px-1 fw-bold"> Última sesión </span>
                            @else
                                <span class="d-block fw-bold">{{$item->no_sesion}} </span>
                            @endif

                        </div>
                        <div class="py-16"><h4>{{$item->tipo_sesion}}</h4>
                            <p>{{$item->anfitriones->legislatura}} - {{$item->periodo}}, {{$item->anio}}</p>
                        </div>
                        <div class="">
                            <a href="{{route("sesiones.show", $item->id_agenda)}}" class="btn btn-outline-dark d-block rounded-3 py-16 fw-bold">Ver sesión</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="px-48 py-24">
                <a id="backToTop"
                   class="btn btn-light d-flex align-items-center justify-content-center d-md-none rounded-4 py-16">
                    <i class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a>
            </div>
        </div>

    </div>
@endsection
