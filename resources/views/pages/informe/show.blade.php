@extends("pages.layouts.app-informe")
@section("content")
    <main>
        <section class="hero">
            <img  src="{{asset($data->integranteLegislatura->informe->header_dip)}}"  class="w-100">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col-12 col-lg-7">
                             <div class="bg-white rounded-4 shadow-lg">
                                <div class="row gx-32 px-32 py-32">
                                    <div class="col-12 col-lg-3">
                                        <div class="bg-figure ratio ratio-1x1 rounded-circle mx-auto w-50 w-lg-100 overflow-hidden">
                                            <img  src="{{asset($data->integranteLegislatura->informe->foto_principal)}}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-9 text-center text-lg-start"><h1>Informe de Labores Legislativas
                                            2022-2023</h1><h4 class="txt">{{$data->nombres}} {{$data->apaterno}} {{$data->amaterno}}</h4>
                                        <nav class="d-flex icons-contacto-diputado">
                                            @if(!is_null($data->facebook) && strlen($data->facebook) > 1)
                                                <a href="https://facebook.com/{{$data->facebook}}" target="_blank"
                                                   class="d-flex align-items-center justify-content-center rounded-3">
                                                    <i class="icon-facebook"></i>
                                                </a>
                                            @endif
                                            @if(!is_null($data->twitter) && strlen($data->twitter) > 1)
                                                <a href="https://twitter.com/{{$data->twitter}}" target="_blank"
                                                   class="d-flex align-items-center justify-content-center rounded-3">
                                                    <i class="icon-twitter"></i>
                                                </a>
                                            @endif
                                            @if(!is_null($data->instagram) && strlen($data->instagram) > 1)
                                                <a href="https://instagram.com/{{$data->instagram}}" target="_blank"
                                                   class="d-flex align-items-center justify-content-center rounded-3">
                                                    <i class="icon-instagram"></i>
                                                </a>
                                            @endif
                                            @if(!is_null($data->facebook))
                                                <a href="{{$data->facebook}}"
                                                   class="d-flex align-items-center justify-content-center rounded-3">
                                                    <i class="icon-www"></i>
                                                </a>
                                            @endif
                                        </nav>
                                    </div>
                                </div>
                             </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            @if ($partido == "Morena")
                <div style="text-align: center; ">
                    <img src="{{asset("/storage/images/Logo2doinforme2023guindagob.png")}}"
                    style=" max-width: 90%; width: 500px;">
                </div>
            @endif
        </section>
        <section class="py-32 my-48">
            <div class="informe-title"><h2>Biografía</h2></div>
            <div class="container-xl">
                <div class="row gx-24">
                    <div class="col-12 col-lg-5">
                        <div class="bg-dark ratio ratio-16x9 rounded-4 overflow-hidden solid-shadow">
                            <img src="{{asset($data->integranteLegislatura->informe->foto_ficha)}}" alt="" class="img-fluid cover-center">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7" >
                        <div  style="height:308px " class="bg-white px-40 py-40 rounded-4"><p class="txt mb-0">DIP.</p>
                            <h2 class="">{{$data->nombres}} {{$data->apaterno}} {{$data->amaterno}}</h2>
                            <p class="txt"><i>Distrito {{$data->integranteLegislatura->distrito->distrito}}</i></p>
                            <ul class="list-unstyled" style="text-align: justify;">
                                <li>
                                    @if($data->integranteLegislatura->distrito->municipio)
                                        {{$data->integranteLegislatura->distrito->municipio->cabecera}}
                                    @endif
                                </li>
                                <liv> {{$data->descripcion}}</liv>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-32 my-48">
            <div class="informe-title"><h2>Leyes que he impulsado</h2></div>
            <div class="bg-dark-opacity py-32">
                <div class="container-xl">
                    <div id="slidesIniciativasIndicators1" class="carousel slide d-lg-none" data-bs-ride="true">
                        <div class="carousel-inner fs-xl-20 rounded-4">
                            @php  $i=0;  @endphp
                            @foreach($data->integranteLegislatura->informe->leyesInforme as $item)
                                <div class="{{ $i == 0 ? "carousel-item active" : "carousel-item " }}">
                                    <p style="text-align: justify;">
                                        {{ $item->bullets }}
                                    </p>
                                </div>
                                @php $i++; @endphp
                            @endforeach
                        </div>
                        <div class="carousel-indicators carousel-dots">
                            @php $i=0; $p=1; @endphp
                            @foreach($data->integranteLegislatura->informe->leyesInforme as $item)
                                <button type="button" data-bs-target="#slidesIniciativasIndicators1" data-bs-slide-to="{{$i}}"
                                class="active" aria-current="{{ $i == 0 ? "true" : "" }}" aria-label="Slide {{$p}}"></button>
                                @php $p++;  $i++;@endphp
                            @endforeach
                        </div>
                    </div>
                    <div id="slidesIniciativasIndicators" class="carousel slide d-none d-lg-block" data-bs-ride="true">
                        <div class="carousel-inner fs-xl-20 rounded-4">
                            @if(isset($data->integranteLegislatura->informe->leyesInforme))
                                @php $i=0; $count = count($data->integranteLegislatura->informe->leyesInforme);  @endphp
                                @while ($i <= $count - 1)
                                    <div class="{{ $i == 0 ? "carousel-item active" : "carousel-item " }}">
                                        <div class="row">
                                            <div class="col-6">
                                                <p style="text-align: justify;">
                                                    {{ isset($data->integranteLegislatura->informe->leyesInforme[$i]) ?  $data->integranteLegislatura->informe->leyesInforme[$i]->bullets : '' }}
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p style="text-align: justify;">
                                                    {{ isset($data->integranteLegislatura->informe->leyesInforme[$i+1]) ?  $data->integranteLegislatura->informe->leyesInforme[$i+1]->bullets : '' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @php $i = $i +2; @endphp
                                @endwhile
                            @endif
                        </div>
                        <div class="carousel-indicators carousel-dots">
                            @php $i=0; $p=1; $j=0; $count = count($data->integranteLegislatura->informe->leyesInforme); @endphp
                            @while ($j <= $count - 1)
                                    <button type="button" data-bs-target="#slidesIniciativasIndicators" data-bs-slide-to="{{$i}}"
                                            class="active"  aria-current="{{ $i == 0 ? "true" : "" }}" aria-label="Slide {{$p}}"></button>
                                    @php $j = $j +2;  $p++;  $i++;@endphp

                            @endwhile
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-intervencion py-lg-32 my-48">
            <div class="container-xl">
                <div class="row position-relative gy-24 gy-lg-0">
                    <div class="col-12 col-lg-6">
                        <div class="bg-dark ratio ratio-16x9 rounded-4 overflow-hidden position-relative">
                            @if($data->integranteLegislatura->informe->type)
                                {!!$data->integranteLegislatura->informe->liga!!}
                            @else
                                <iframe src="{{asset($data->integranteLegislatura->informe->liga)}}" height="200" width="300" title="Iframe Example"></iframe>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center pb-32 pb-lg-0">
                        <div><h1>Intervención  @if($data->genero->genero == "Masculino") Diputado @else Diputada @endif {{$data->nombres}} {{$data->apaterno}} {{$data->amaterno}}</h1>
                            <p><strong>{{ Date::parse($data->integranteLegislatura->informe->fecha_inter)->format('d') }} de {{ Date::parse($data->integranteLegislatura->informe->fecha_inter)->formatLocalized('%B') }} de
                                    {{ Date::parse($data->integranteLegislatura->informe->fecha_inter)->format('Y') }} </strong></p>
                            <p>Primer Periodo Ordinario de Sesiones del Tercer Año de Ejercicio Constitucional LXI
                                Legislatura</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-60">
            <div class="informe-title"><h2 class="fs-32">Galería</h2></div>
            <div class="container-xl">
                <div class="row g-32">
                    @foreach($data->integranteLegislatura->informe->foto as $item)
                        <div class="col-12 col-md-2 col-lg-4">
{{--                            <div class="bg-dark ratio ratio-16x9 rounded-4">--}}
                                <img src="{{asset($item->path)}}" alt="" class="bg-dark ratio ratio-16x9 rounded-4">
{{--                            </div>--}}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="my-60">
            <div class="container-xl">
                <div class="bg-dark-opacity rounded-4 overflow-hidden p-24 p-lg-0 text-center text-lg-start">
                    <div class="row">
                        <div class="col-2 d-none d-lg-block">
                            <div class="bg-dark ratio ratio-1x1 flex-shrink-0 flex-grow-0"><img
                                    src="{{asset($data->integranteLegislatura->informe->foto_descarga)}}"alt=""
                                    class="img-fluid cover-center">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center"><h1>Descarga el
                                Informe de Actividades Legislativas</h1></div>
                        <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center"><a
                                class="btn d-block rounded-4 py-16 px-32 fs-24 fw-bold"  href="{{asset($data->integranteLegislatura->informe->path)}}"
                                target="_blank" >Descargar</a></div>
                    </div>
                </div>
            </div>
        </section>

{{--        <section class="my-60">--}}
{{--            <div class="container-xl">--}}
{{--                <div class="bg-light-opacity rounded-4 overflow-hidden px-48 py-48">--}}
{{--                    <div class="row gx-48">--}}
{{--                        <div class="col-12 col-lg-2">--}}
{{--                            <div src="{{asset($data->integranteLegislatura->partido->emblema)}}">--}}
{{--                                <img  src="{{asset($data->integranteLegislatura->partido->emblema)}}" class="bg-dark ratio ratio-1x1 rounded-circle w-50 w-lg-100 mb-24">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-lg-10 d-flex align-items-left justify-content-left">--}}
{{--                            <div><h1>{{$data->nombres}} {{$data->apaterno}} {{$data->amaterno}}</h1>--}}
{{--                                <p><a href="">@ProfeMaurilioHG</a></p>--}}
{{--                                <p>El dia de hoy, los integrantes del grupo parlamentario de #morena, tuvimos la oportunidad--}}
{{--                                    de acompañar a nuestro compañero el Diputado @maxcorreah en la rendición de su 2do.--}}
{{--                                    Informe Legislativo, en donde ha dado muestra del trabajo legislativo que en conjunto se--}}
{{--                                    ha realizado y que como consecuencia ha hecho prevalecer la transformación no solo en el--}}
{{--                                    municipio de #Tlalnepantla sino en todo el Estado de México.</p></div>--}}
{{--                                <h4>Sígueme</h4>--}}
{{--                                    --}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <section>
            <div class="container-xl py-24 py-lg-32 fw-lighter fs-12 text-center"><p>Este micrositio fue diseñado y
                    programado con información que compartió el equipo de la persona legisladora integrante de la LXI
                    Legislatura.</p></div>
        </section>
    </main>
@endsection
