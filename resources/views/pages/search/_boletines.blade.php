<div class="tab-pane fade @if($i == 0) show active @endif" id="{{$type}}" role="tabpanel"
     aria-labelledby="{{$type}}-tab">
    <div class="py-24 py-md-32">
        <h3 class="fw-light mb-0"><b>Búsqueda</b></h3>
        <h1 class="fw-bold">{{ucfirst($type)}}</h1>
    </div>
    <div class="mb-24">
        @foreach($modelSearchResults as $item)
            <div class="noticia bg-light rounded-4 overflow-hidden mb-24">
                <div class="row gx-0">
                    <div class="col-12 col-lg-5">
                        <figure class="ratio ratio-16x9 mb-0">
                            @if($item->searchable->foto->first())
                                <img src="{{asset($item->searchable->foto->first()->path)}}" alt="">
                            @endif
                        </figure>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="p-16 p-lg-24"><h4> @if(isset($item->searchable->titulo))
                                    {{$item->searchable->titulo}}
                                @endif</h4>
                            <p>@if(isset($item->searchable->texto))
                                    {{substr($item->searchable->texto, 0, 200) }}...
                                @endif</p>
                            <div class="d-flex">
                                <a href="{{route("boletin.show", $item->searchable->id)}}"
                                   class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                    Abrir comunicado</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
