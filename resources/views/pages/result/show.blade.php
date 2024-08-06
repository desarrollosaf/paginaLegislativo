@extends("pages.layouts.app")
@section("content")

    <div id="contenido" style="width: 100%; max-width: 1260px;  ">
        <!--<div style="width: 100%; max-width: 1260px; margin: auto; padding-top: 202px;">-->
        <h1>{{ $searchterm }}</h1>
        <div id="contenido_center" style="max-width: 610px;">
            @foreach($result->groupByType() as $type => $modelSearchResults)

                    @if( ucwords($type) == "Diputados")
                        @include("pages.result._diputados")
                        <div style="clear: both; height: 30px;"></div>
                    @endif
                    {{--                @if(ucwords($type) == "Cdd_directorio")--}}
                    {{--                    @include("pages.result._directorio")--}}
                    {{--                    <div style="clear: both; height: 30px;"></div>--}}
                    {{--                @endif--}}
                    {{--                @if(ucwords($type) == "Cdd_comisiones")--}}
                    {{--                    @include("pages.result._comisiones")--}}
                    {{--                    <div style="clear: both; height: 30px;"></div>--}}
                    {{--                @endif--}}
                    {{--                @if(ucwords($type) == "Cdd_iniciativas")--}}
                    {{--                    @include("pages.result._iniciativas")--}}
                    {{--                    <div style="clear: both; height: 30px;"></div>--}}
                    {{--                @endif--}}

            @endforeach
        </div>
{{--        <div id="contenido_left" style="max-width: 610px;">--}}
{{--            @foreach($result->groupByType() as $type => $modelSearchResults)--}}
{{--                @if(ucwords($type) == "Cdd_secciones")--}}
{{--                    @include("pages.result._secciones")--}}
{{--                    <div style="clear: both; height: 30px;"></div>--}}
{{--                @endif--}}
{{--                @if(ucwords($type) == "Cdd_eventos")--}}
{{--                    @include("pages.result._eventos")--}}
{{--                    <div style="clear: both; height: 30px;"></div>--}}
{{--                @endif--}}
{{--                @if(ucwords($type) == "Cdd_legislacion")--}}
{{--                    @include("pages.result._legislacion")--}}
{{--                    <div style="clear: both; height: 30px;"></div>--}}
{{--                @endif--}}
{{--                @if(ucwords($type) == "Cdd_fotos")--}}
{{--                    @include("pages.result._fotos")--}}
{{--                    <div style="clear: both; height: 30px;"></div>--}}
{{--                @endif--}}
{{--                @if(ucwords($type) == "Cdd_comunicados")--}}
{{--                    @include("pages.result._comunicados")--}}
{{--                    <div style="clear: both; height: 30px;"></div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>


@endsection
