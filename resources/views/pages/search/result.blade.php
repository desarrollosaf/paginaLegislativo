@extends('pages.layouts.app')
@section('content')
    <div class="container-xl">
        <div class="container-xl">
            <div class="row gx-24">
                <div class="col-12 col-lg-3 col-xl-2 border-bottom border-light py-12">
                    <nav class="side-navbar nav" id="tabDiputado" role="tablist">
                        @php($i = 0)
                        @foreach($result->groupByType() as $type => $modelSearchResults)
                            <a class="nav-link rounded-4 @if($i == 0) active @endif"
                               id="{{$type}}-tab" data-bs-toggle="tab"
                               data-bs-target="#{{$type}}" type="button"
                               role="tab" aria-controls="home"
                               aria-selected="true">
                                @if($type == "diputados")
                                    @php($path = "ICONS_FEBRERO2023-02.svg")
                                @elseif($type == "iniciativas")
                                    @php($path = "ICONS_FEBRERO2023-03.svg")
                                @else
                                    @php($path = "ICONS_FEBRERO2023-06.svg")
                                @endif
                                <img class="hoverable" src="{{asset("/storage/images/".$path)}}" width="20px"><span
                                    style="padding-left: 10px !important;">{{ucfirst($type)}}</span>
                            </a>
                            @php($i++)
                        @endforeach
                    </nav>
                </div>
                <div class="col-12 col-lg-9 col-xl-10">
                    <div class="tab-content" id="tabSesionContent">
                        @php($i = 0)

                    @foreach($result->groupByType() as $type => $modelSearchResults)
                            @if($type == "diputados")
                                @include("pages.search._diputados")
                            @endif
                            @if($type == "iniciativas")
                                @if(!isset($result->groupByType()["diputados"]))
                                    @include("pages.search._iniciativas")
                                @endif
                            @endif
                            @if($type == "comunicados")
                                @include("pages.search._boletines")
                            @endif
                            @php($i++)


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-md-none px-48 py-24"><a id="backToTop"
                                          class="btn btn-light d-flex align-items-center justify-content-center rounded-4 py-16"><i
                class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a></div>
@endsection
