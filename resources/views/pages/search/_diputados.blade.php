<div class="tab-pane fade show active" id="{{$type}}" role="tabpanel"
     aria-labelledby="{{$type}}-tab">
    <div class="py-24 py-md-32">
        <h3 class="fw-light mb-0"><b>Búsqueda</b></h3>
        <h1 class="fw-bold">{{ucfirst($type)}}</h1>
    </div>
    <div class="mb-24">
        <div class="row align-items-stretch g-24">
            @foreach($modelSearchResults as $item)
                <div class="col-12 col-lg-3">
                    <div class="card-diputado-sm">
                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                            <figure class="mb-0 ratio ratio-1x1">
                                <img src="{{asset($item->searchable->foto->path)}}"
                                     class="img-fluid">
                            </figure>
                            <div class="position-absolute top-0 end-0 p-16"></div>
                        </div>
                        <div class="border border-top-0 rounded-bottom-4 p-16">
                            <h4 class="fs-16">{{$item->searchable->apaterno}} {{$item->searchable->nombres}}</h4>
                            <p class="fs-12 mb-16"></p>
                            <a href="{{route("diputadasydiputados.show", $item->searchable->integranteLegislatura->id)}}"
                               class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">
                                @if($item->searchable->genero->genero === "Femenino")
                                    Ver a mi Diputada
                                @else
                                    Ver a mi Diputado
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="tab-pane fade" id="iniciativas" role="tabpanel"
     aria-labelledby="iniciativas-tab">
    <div class="py-24 py-md-32">
        <h3 class="fw-light mb-0"><b>Búsqueda</b></h3>
        <h1 class="fw-bold">{{ucfirst("iniciativas")}}</h1>
    </div>
    <div class="mb-24">
        @foreach($modelSearchResults as $item)
            @foreach($item->searchable->integranteLegislatura->autor as $iniciativa)
                <div class="card-iniciativa position-relative bg-lighter rounded-4 p-16 pt-md-40 p-md-32 mb-24">
                    <div class="text-right">
                        <p>
                            {{ Date::parse($iniciativa->iniciativa->fecha_presentacion)->format('d') }}
                            de
                            {{ ucfirst(Date::parse($iniciativa->iniciativa->fecha_presentacion)->formatLocalized('%B'))}}
                            ,
                            {{ Date::parse($iniciativa->iniciativa->fecha_presentacion)->format('Y') }}
                        </p>
                    </div>
                    <div class="list-diputados d-flex flex-wrap">
                        @if(count($iniciativa->iniciativa->autor))
                            @foreach($iniciativa->iniciativa->autor as $autor)
                                <div class="d-flex align-items-center bg-light py-12 px-16 rounded-4 me-16 mb-16">
                                    <figure class="m-0 me-lg-12">
                                        <img
                                            src="{{asset($autor->foto_field_autor)}}" alt=""
                                            class="rounded-circle border border-primary">
                                    </figure>
                                    <p class="d-none d-lg-block mb-0 fw-semibold">{{$autor->name_field}}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="bg-light p-16 p-lg-32 rounded-4">
                        <div class="fs-lg-18"><p>{{$iniciativa->iniciativa->iniciativa}}</p>
                        </div>
                        <div class="scrollable-x-panel">
                            <div class="d-flex flex-wrap fs-13 fw-semibold">
                                @foreach($iniciativa->iniciativa->comision as $comision)
                                    <div class="overflow d-flex align-items-center mb-16 mb-lg-0 w-100">
                                        <div class="icon-text-card d-flex align-items-center azul">
                                            <div class="icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAASFBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////8FevL4AAAAF3RSTlMA8UMUCPrbZjOYqOdZ0CDFtaGITm4oeYLSbXYAAAKASURBVBgZ7cFZdptAAEXB1yPQzOPd/07TEISRrGOf5DNxlX78+B842zTW6W/ZIZCFwepv+MQlef0x33LTen3Pr6XTZSAz47YlQzbo4srV6zM7BKBdvA4N2eiUuZGs0cEvLRAGqxcVp7bTLgKVThUQtetaTpWeVFyik1QCtdfJ10ApyUUuo25mMjOkSJYkLcCkywQskhJZTIMhm/WhBfpO8hPZKk3ArMsMTNJKNknqeqDVZQVqp10CNqkCrC4WqKQNSNq5Glj1MAOTDiWQpA0odCmATUpAqUMFzHoogE2HDhikGeh16YFZGoBOhw0o9DADSYcZGCVvgFmnBjBeGoFZhwRYPbgAwSrzLVBImgBjdbAGmCQVQPTKygDB6TIApvAqe8A4Sa4mS9Y5m8hqJ8kZoC/lCwMkfVgDWTDsNu3KwE0otdvYmUAWVt00gYek38qai7H6LfEQGj2xNYcw6aEbOY1OD1PgUFu98MUQ637qdNMtY9+PS6ebburrOBRe/yA7DW3sx8brpivnuex045uxj+0wWT0rak6hcjr4Zqw51GPjdXCV4VQX+rC23JhGkl9qbmLhJRWGm7bTyRqebVpbXrSrNp7VVofVkMVl9b5rBnbJsAv9OE1jH9iZxG5oOu/XJZKZVZmPQFh0spFTLJwOroicotVpCUD0kjYgWF1cZBcW3SyBXXS62ABskjdAoZuSrC71pKzJSt0UgPFqgF53CahXvVhrIOmuBRoloNFNSTbrk5ms1E0DjGqBVN20wKg3RqCtbhLQyvBZ6PRGF/isFm8MemvgDfFGobcW3lD5ogem4q0J6MsXetXzpV7fiXwp6juRL0V9pym+1OjHj3/TL2qnWfdFhM29AAAAAElFTkSuQmCC">
                                            </div>
                                            <div class="text-nowrap">
                                                <p><strong>Turnada a:</strong></p>
                                                <p>{{$comision->comision->nombre}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

