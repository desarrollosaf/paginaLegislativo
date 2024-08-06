<div class="tab-pane fade show active" id="perfil" role="tabpanel"
     aria-labelledby="perfil-tab">
    <div class="mb-24">
        <div class="row align-items-stretch gx-24">
            <div class="col-12 col-lg-7 col-xl-8 mb-24 mb-lg-0">
                <div
                    class="card-diputado d-flex flex-column flex-lg-row rounded-4 bg-lighter overflow-hidden">
                    <div class="col-12 col-lg-5">
                        <div class="position-relative h-100 w-100">
                            <div class="ratio ratio-1x1"><img
                                    src="{{asset($data->foto->path)}}" class="img-fluid">
                            </div>

                            <div
                                class="position-absolute top-0 end-0 p-16">{{$data->integranteLegislatura->partido->siglas}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="p-16 p-lg-32"><p class="mb-0">
                                Distrito {{$data->integranteLegislatura->distrito->distrito}}</p>
                            <p class="fw-semibold">
                                @if($data->integranteLegislatura->distrito->municipio)
                                    {{$data->integranteLegislatura->distrito->municipio->cabecera}}
                                @endif
                            </p>
                            <p align="justify">
                                {{$data->descripcion}}
                                {{--                                {{asset($data->foto->path)}}--}}
                            </p>
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
                                    @if(!is_null($actividadProxima))
                                        Recinto Legislativo  {{\Carbon\Carbon::parse($actividadProxima->fecha_hora)->diffForHumans()}}
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
                        <div class="mb-24 mb-md-0 mb-lg-24 me-32"><h4>Contáctame</h4>
                            <nav class="d-flex icons-contacto-diputado mb-lg-4">
                                @if(!is_null($data->email) && strlen($data->email) > 1)
                                    <a href="mailto:{{$data->email}}"
                                       class="d-flex align-items-center justify-content-center rounded-3">
                                        <i class="icon-email fs-24"></i>
                                    </a>

                                @endif
                                @if(!is_null($data->ubicacion) && strlen($data->ubicacion) > 1)
                                    <a href="{{$data->ubicacion}}" target="_blank"
                                       class="d-flex align-items-center justify-content-center rounded-3">
                                        <i class="icon-location fs-24"></i>
                                    </a>
                                @endif
                                @if(!is_null($data->telefono) && strlen($data->telefono) > 1)
                                    <a href="tel:{{$data->telefono}}"
                                       class="d-flex align-items-center justify-content-center rounded-3">
                                        <i class="icon-telephone fs-24"></i>
                                    </a>
                                @endif

                            </nav>
                        </div>
                        <div><h4>Sígueme</h4>
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
    <div class="mb-24">
        <div class="bg-lighter p-16 pb-0 p-lg-24 pb-lg-8 pe-0 rounded-4"><h4 class="mb-24">
                Comisiones de {{$data->nombres}}</h4>
            <div class="scrollable-x-panel">
                <div class="d-flex flex-wrap fs-13 fw-semibold">
                    @foreach($data->integranteLegislatura->comisiones->sortBy("cargo.nivel") as $item)
                        <div
                            class="icon-text-card d-flex align-items-center me-16 mb-16 {{$item->cargo->valor == "Presidencia" ? 'morado' : 'azul'}}">
                            <div class="icon">
                                @if($item->cargo->valor == "Presidencia")
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                @else
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAASFBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////8FevL4AAAAF3RSTlMA8UMUCPrbZjOYqOdZ0CDFtaGITm4oeYLSbXYAAAKASURBVBgZ7cFZdptAAEXB1yPQzOPd/07TEISRrGOf5DNxlX78+B842zTW6W/ZIZCFwepv+MQlef0x33LTen3Pr6XTZSAz47YlQzbo4srV6zM7BKBdvA4N2eiUuZGs0cEvLRAGqxcVp7bTLgKVThUQtetaTpWeVFyik1QCtdfJ10ApyUUuo25mMjOkSJYkLcCkywQskhJZTIMhm/WhBfpO8hPZKk3ArMsMTNJKNknqeqDVZQVqp10CNqkCrC4WqKQNSNq5Glj1MAOTDiWQpA0odCmATUpAqUMFzHoogE2HDhikGeh16YFZGoBOhw0o9DADSYcZGCVvgFmnBjBeGoFZhwRYPbgAwSrzLVBImgBjdbAGmCQVQPTKygDB6TIApvAqe8A4Sa4mS9Y5m8hqJ8kZoC/lCwMkfVgDWTDsNu3KwE0otdvYmUAWVt00gYek38qai7H6LfEQGj2xNYcw6aEbOY1OD1PgUFu98MUQ637qdNMtY9+PS6ebburrOBRe/yA7DW3sx8brpivnuex045uxj+0wWT0rak6hcjr4Zqw51GPjdXCV4VQX+rC23JhGkl9qbmLhJRWGm7bTyRqebVpbXrSrNp7VVofVkMVl9b5rBnbJsAv9OE1jH9iZxG5oOu/XJZKZVZmPQFh0spFTLJwOroicotVpCUD0kjYgWF1cZBcW3SyBXXS62ABskjdAoZuSrC71pKzJSt0UgPFqgF53CahXvVhrIOmuBRoloNFNSTbrk5ms1E0DjGqBVN20wKg3RqCtbhLQyvBZ6PRGF/isFm8MemvgDfFGobcW3lD5ogem4q0J6MsXetXzpV7fiXwp6juRL0V9pym+1OjHj3/TL2qnWfdFhM29AAAAAElFTkSuQmCC">
                                @endif
                            </div>

                            <div><p><strong>{{$item->cargo->valor}}</strong></p>
                                <p class="d-xl-none">{{$item->comision->nombre}}</p>
                                <p class="d-none d-xl-block">
                                    {{$item->comision->nombre}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

{{--        div de iniciativas--}}
{{--        <div class="row gx-24">--}}
{{--            <div class="col-12 col-lg-6 mb-24 mb-lg-0">--}}
{{--                <div class="bg-purple rounded-4">--}}
{{--                    <div class="p-24"><h4 class="mb-0 text-white">Iniciativas</h4></div>--}}

{{--                    <div class="p-8 pt-0">--}}

{{--                        <div class="bg-white p-24 rounded-3">--}}
{{--                            <div id="slidesIniciativasIndicators" class="carousel slide" data-bs-ride="true">--}}
{{--                                <div class="carousel-inner bg-lighter fs-16 fs-xl-20 rounded-4">--}}
{{--                                    @if(isset($data->integranteLegislatura->autor))--}}
{{--                                        @php $i=0; @endphp--}}
{{--                                        @foreach($data->integranteLegislatura->autor as $item)--}}
{{--                                            <div class="{{ $i == 0 ? "carousel-item active" : "carousel-item " }}">--}}
{{--                                                <div class="{{ $i == 0 ? "p-24 fs-1 fs-lg-5" : "p-24" }}">--}}

{{--                                                    <p class="m-0">--}}
{{--                                                    <h6>Iniciativa No. {{$item->iniciativa->folio}}</h6>--}}
{{--                                                    <p class="m-0" align="justify">--}}
{{--                                                        {{substr($item->iniciativa->iniciativa, 0, 120) }}...--}}
{{--                                                    </p>--}}
{{--                                                    </p>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            @php $i++; @endphp--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="carousel-indicators carousel-dots">--}}
{{--                                    @php $i=0; @endphp--}}
{{--                                    @foreach($data->integranteLegislatura->autor->take(5) as $item)--}}
{{--                                        <button type="button"--}}
{{--                                                data-bs-target="#slidesIniciativasIndicators"--}}
{{--                                                data-bs-slide-to="{{$i}}" class="{{ $i == 0 ? "active" : "" }}"--}}
{{--                                                aria-current="true"--}}
{{--                                                aria-label="Slide 1"></button>--}}
{{--                                        @php $i++; @endphp--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a class="btn btn-darker d-block rounded-4 py-16" id="show-iniciativas">Ver todas las--}}
{{--                                Iniciativas</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    div  de noticias--}}
{{--            <div class="col-12 col-lg-6 mb-24 mb-lg-0 d-flex">--}}
{{--                <div class="bg-darker rounded-4 d-flex flex-column flex-grow-1">--}}
{{--                    <div class="p-24"><h4 class="mb-0 text-white">Noticias</h4></div>--}}
{{--                    <div class="d-flex flex-grow-1 p-32">--}}
{{--                        <div class="d-flex flex-column justify-content-between">--}}
{{--                            <div id="slidesNoticiasIndicators"--}}
{{--                                 class="carousel slide d-flex flex-column justify-content-between flex-grow-1"--}}
{{--                                 data-bs-ride="true">--}}
{{--                                <div class="carousel-inner text-white">--}}
{{--                                    @if(isset($data->integranteLegislatura->autorcomunicado))--}}
{{--                                        @php $i=0; @endphp--}}
{{--                                        @foreach($data->integranteLegislatura->autorcomunicado as $item)--}}
{{--                                            <div class="{{ $i == 0 ? "carousel-item active" : "carousel-item " }}">--}}
{{--                                                <div>--}}

{{--                                                    <h4>{{$item->comunicado->titulo}}</h4>--}}
{{--                                                    <p class="m-0" align="justify">--}}
{{--                                                        {{substr($item->comunicado->texto, 0, 200) }}...--}}
{{--                                                    </p>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            @php $i++; @endphp--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="carousel-indicators carousel-dots dots-light">--}}
{{--                                    @php $i=0; @endphp--}}
{{--                                    @foreach($data->integranteLegislatura->autor->take(5) as $item)--}}
{{--                                        <button type="button"--}}
{{--                                                data-bs-target="#slidesNoticiasIndicators"--}}
{{--                                                data-bs-slide-to="{{$i}}" class="{{ $i == 0 ? "active" : "" }}"--}}
{{--                                                aria-current="true"--}}
{{--                                                aria-label="Slide 1"></button>--}}
{{--                                        @php $i++; @endphp--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="d-grid">--}}
{{--                                <a class="btn btn-light d-block rounded-4 py-16" id="show-comunicados">--}}
{{--                                    Ver todos los comunicados--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
</div>
@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $("#show-iniciativas").click(function () {
                $("#iniciativas").addClass("active show");
                $("#perfil").removeClass("active show");
                $("#comunicados").removeClass("active show");
                $("#iniciativas-tab").addClass("active").attr("aria-selected", true);
                $("#comunicados-tab").removeClass("active").removeAttr("aria-selected");
                $("#perfil-tab").removeClass("active").removeAttr("aria-selected");
            });
            $("#show-comunicados").click(function () {
                $("#iniciativas").removeClass("active show");
                $("#perfil").removeClass("active show");
                $("#comunicados").addClass("active show");
                $("#comunicados-tab").addClass("active").attr("aria-selected", true);
                $("#iniciativas-tab").removeClass("active").removeAttr("aria-selected");
                $("#perfil-tab").removeClass("active").removeAttr("aria-selected");
            });
        });
    </script>
@endpush

