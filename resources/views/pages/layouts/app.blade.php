<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Poder Legislativo del Estado de México</title>
    <link rel="icon" type="image/png" href="{{asset("storage/img/favicon.svg")}}">
    <script defer="defer" src="{{asset("js/app.js")}}"></script>
    <script defer="defer" src="{{asset("js/particles.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="{{asset("css/app.css")}}" rel="stylesheet">
    <meta property="og:image" content="@if(isset($comunicado)){{asset($data->foto->first()->path)}}@else{{asset("storage/images/shield-lg.png")}}@endif"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
{{--    <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>--}}
{{--    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=header&aut=legislativoedomex.gob.mx" type="text/javascript"></script>--}}
{{--    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=body&aut=legislativoedomex.gob.mx" type="text/javascript"></script>--}}
{{--    <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=footer&aut=legislativoedomex.gob.mx" type="text/javascript"></script>--}}
</head>
<body>
<div class="escudo"><img id="escudo" src="{{asset("storage/images/shield-lg.png")}}"></div>
<header>
    <nav class="navbar navbar-expand-xl">
        <div class="container-xl position-lg-relative d-flex align-items-center justify-content-between py-16 py-lg-0">
            <a class="navbar-brand d-flex align-items-center position-relative" href="{{asset("/")}}"><img
                    src={{asset("storage/images/brand.svg")}} alt=""> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            @include("pages.layouts.menu")
        </div>
    </nav>
</header>
<main>
    @yield("content")
</main>
@include("pages.layouts.footer")
@yield("scripts")
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack("page-scripts")

</body>
</html>
