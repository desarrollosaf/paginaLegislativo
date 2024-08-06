<div class="tab-pane fade" id="comunicados" role="tabpanel" aria-labelledby="comunicados-tab">

    @if(isset($data->integranteLegislatura->autorcomunicado[0]))
        <div class="mb-24">
            @if(!$data->integranteLegislatura->autorcomunicado[0]->comunicado->foto->first())
                @dd($data->integranteLegislatura->autorcomunicado[0]->comunicado)
            @endif
            <div class="noticia-destacada bg-darker position-relative rounded-4 overflow-hidden">
                <figure class="ratio ratio-16x9">
                    <img
                        src="{{asset($data->integranteLegislatura->autorcomunicado[0]->comunicado->foto->first()->path)}}"
                        alt="">
                </figure>

                <div
                    class="d-flex flex-column align-items-stretch align-items-md-start justify-content-end p-16 p-lg-24 pt-0 col-lg-8 text-white position-lg-absolute start-0 bottom-0">

                    <h4>{{$data->integranteLegislatura->autorcomunicado[0]->comunicado->titulo}}</h4>
                    {{--                    <p>{{substr($data->integranteLegislatura->autorcomunicado[0]->comunicado->texto, 0, 300) }}...</p>--}}
                    <a href="{{route("boletin.show", $data->integranteLegislatura->autorcomunicado[0]->comunicado->id)}}"
                       class="btn btn-dark rounded-4 py-16 px-32">Abrir Comunicado</a></div>
            </div>
        </div>
    @endif


    {{--      comunicados secundarios           --}}
    @php
        $i = 0;
    @endphp
    @if(isset($data->integranteLegislatura->autorcomunicado ))
        @foreach($data->integranteLegislatura->autorcomunicado as $item)
            @if($i >= 1)
                <div class="noticia bg-light rounded-4 overflow-hidden mb-24">
                    <div class="row gx-0">
                        <div class="col-12 col-lg-5">
                            <figure class="ratio ratio-16x9 mb-0">
                                @if($item->comunicado->foto->first())
                                    <img src="{{asset($item->comunicado->foto->first()->path)}}" alt="">
                                @endif
                            </figure>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="p-16 p-lg-24"><h4> @if(isset($item->comunicado->titulo))
                                        {{$item->comunicado->titulo}}
                                    @endif</h4>
                                <p>@if(isset($item->comunicado->texto))
                                        {{substr($item->comunicado->texto, 0, 200) }}...
                                    @endif</p>
                                <div class="d-flex">
                                    <a href="{{route("boletin.show", $item->comunicado->id)}}"
                                       class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                        Abrir comunicado</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @php
                $i ++;
            @endphp
        @endforeach
    @endif

    {{--   @for( $i > count($data->integranteLegislatura->autorcomunicado); )--}}
    {{--        <div class="noticia bg-light rounded-4 overflow-hidden mb-24">--}}
    {{--            <div class="row gx-0">--}}
    {{--                <div class="col-12 col-lg-5">--}}
    {{--                    <figure class="ratio ratio-16x9 mb-0"><img src="./images/noticia-1.jpg" alt=""> </figure>--}}
    {{--                </div>--}}
    {{--                <div class="col-12 col-lg-7">--}}
    {{--                    <div class="p-16 p-lg-24"><h4> {{$item->comunicado->titulos}}</h4>--}}
    {{--                        <p>{{$item->comunicado->texto}}</p>--}}
    {{--                        <div class="d-flex">--}}
    {{--                            <a href="" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">--}}
    {{--                                Abrir comunicado</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--   @endfor--}}


</div>
