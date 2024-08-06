<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Palacio Legislativo</title>
{{--    <script src="https://code.jquery.com/jquery-3.6.3.js"--}}
{{--            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>--}}
    <script defer="defer" src="{{asset("assets/basicos/cinco.js")}}"></script>
{{--    <script defer="defer" src="{{asset("assets/basicos/diputadas.js")}}"></script>--}}
{{--    <script defer="defer" src="{{asset("assets/basicos/lottie.js")}}"></script>--}}
{{--    <script defer="defer" src="{{asset("assets/basicos/main.js")}}"></script>--}}
{{--        <script defer="defer" src="{{asset("assets/basicos/particles.js")}}"></script>--}}
    <link href="{{asset("assets/basicos/cinco.css")}}" rel="stylesheet">
    <link rel="shortcut icon" href="https://legislacion.legislativoedomex.gob.mx/storage/favicon.svg">
</head>

<body>
{{--<div class="escudo"><img id="escudo" src="{{asset("storage/images/shield-outer.png")}}"></div>--}}
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
<footer>
    <div class="bg-lighter bg-opacity-50 pt-60 pb-40 pb-lg-60 position-relative">
        <div class="position-absolute top-0 start-50 t-50n"><img src={{asset("/storage/images/brand.svg")}} alt="" class="w-240"></div>
        <div class="container-xl mb-60">
            <div class="d-flex flex-column flex-lg-row align-items-center">
                <div class="col-12 col-lg-6 mb-16 mb-lg-0"><h4 class="text-center fs-16">Poder Legislativo del Estado de
                        México</h4>
                    <nav
                        class="d-flex align-items-center justify-content-center flex-wrap text-nowrap fs-12 nav-footer">
                        <a href="http://legislacion.legislativoedomex.gob.mx/avisosdeprivacidad" target="_blank">Aviso
                            de Privacidad</a>
                        <a href="http://legislacion.legislativoedomex.gob.mx/transparencia" target="_blank">Transparencia</a>
                        <a href="http://legislacion.legislativoedomex.gob.mx/dependencias"
                           target="_blank">Dependencias</a>
                    </nav>
                </div>
                <div class="col-12 col-lg-3 mb-16 mb-lg-0">
                    <nav class="d-flex justify-content-center justify-content-lg-end social-icons">
                        <a href="http://fb.me/legismex" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark me-16">
                            <i class="icon-facebook-fill"></i>
                        </a>
                        <a href="http://twitter.com/legismex" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark me-16">
                            <i class="icon-twitter-fill"></i>
                        </a>
                        <a href="http://instagram.com/legismex" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark me-16">
                            <i class="icon-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC9kqSF0ZBUhSRp4cyWL_oAA" target="_blank"
                           class="d-flex align-items-center justify-content-center text-dark">
                            <i class="icon-youtube"></i>
                        </a>
                    </nav>
                </div>
                <div class="col-12 col-lg-3 fs-12 text-center text-lg-start order-lg-first lh-sm"><p class="mb-8">Plaza
                        Hidalgo s/n, Col. Centro<br>Toluca de Lerdo, Estado de México</p>
                    <p class="mb-0">Conmutador (722) 279-6400</p></div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
