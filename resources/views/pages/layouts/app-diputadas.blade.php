<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Palacio Legislativo</title>
    <script defer="defer" src="{{asset("assets/diputadas/lottie.js")}}"></script>
    <script defer="defer" src="{{asset("assets/diputadas/diputadas.js")}}"></script>
    <script defer="defer" src="{{asset("assets/diputadas/main.js")}}"></script>
    <link href="{{asset("assets/diputadas/main.css")}}" rel="stylesheet">
    <link rel="shortcut icon" href="https://legislacion.legislativoedomex.gob.mx/storage/favicon.svg">
    
    <style>
        @media only screen and (max-width: 1000px) {
            .py-80 {
                padding-top: 35px !important;
                padding-bottom: 35px !important;
            }

            h1 {

                margin-top: 18px !important;
            }

            .icon-text-card {
                margin-bottom: 7px !important;
            }

        }
    </style>
</head>
<body class="diputadas">
<div class="escudo"><img id="escudo" src="{{asset("storage/images/shield-lg.png")}}"></div>
<header>
    <nav class="navbar navbar-expand-xl">
        <div class="container-xl position-lg-relative d-flex align-items-center justify-content-between py-16 py-lg-0">
            <a class="navbar-brand d-flex align-items-center position-relative" href="{{asset("/")}}"><img
                    src="{{asset("storage/images/brand.svg")}}" alt=""> </a>
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
</body>
</html>
