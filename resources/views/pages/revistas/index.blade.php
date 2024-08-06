@extends('pages.layouts.app')
@section('content')
    <div class="container-xl">
        <div class="container-xl">
            <div class="row gx-24">
                <div class="col-12 col-lg-3 col-xl-2 border-bottom border-light py-12">
                    <nav class="side-navbar nav" id="tabDiputado" role="tablist">

                        <a class="nav-link rounded-4 active"
                           id="gaceta-tab" data-bs-toggle="tab"
                           data-bs-target="#gaceta" type="button"
                           role="tab" aria-controls="home"
                           aria-selected="true">
                            <img class="hoverable" src="./storage/images/icons_pagina-01.svg" width="20px"><span
                                style="padding-left: 10px !important;">Gaceta</span>
                        </a>
                        <a class="nav-link rounded-4" id="legislacion-tab" data-bs-toggle="tab"
                           data-bs-target="#legislacion"
                           type="button" role="tab" aria-controls="contact" aria-selected="false">
                            <img class="hoverable" src="./storage/images/icons_pagina-02.svg" width="20px"><span
                                style="padding-left: 10px !important;">Legislación</span>
                        </a>
                        <a class="nav-link rounded-4" id="debates-tab" data-bs-toggle="tab" data-bs-target="#debates"
                           type="button" role="tab" aria-controls="contact" aria-selected="false">
                            <img class="hoverable" src="./storage/images/icons_pagina-03.svg" width="20px"><span
                                style="padding-left: 10px !important;">Diario de Debates</span>
                        </a>
                        <a class="nav-link rounded-4" id="minutas-tab" data-bs-toggle="tab" data-bs-target="#minutas"
                           type="button" role="tab" aria-controls="contact" aria-selected="false">
                            <img class="hoverable" src="./storage/images/icons_pagina-04.svg" width="20px"><span
                                style="padding-left: 10px !important;">Minutas del Congreso</span>
                        </a>
                        <a class="nav-link rounded-4" id="dialogo-tab" data-bs-toggle="tab" data-bs-target="#dialogo"
                           type="button" role="tab" aria-controls="contact" aria-selected="false">
                            <img class="hoverable" src="./storage/images/icons_pagina-05.svg" width="20px"><span
                                style="padding-left: 10px !important;">Diálogo </span>
                        </a>
                    </nav>
                </div>
                <div class="col-12 col-lg-9 col-xl-10">
                    <br>
                    <div class="tab-content" id="tabSesionContent">
                        <div class="tab-pane fade show active" id="gaceta" role="tabpanel" aria-labelledby="gaceta-tab">
                            <div class="py-24 py-md-32">
                                <h3 class="fw-light mb-0"><b>Recursos Documentales</b></h3>
                                <h1 class="fw-bold">Gaceta</h1>
                            </div>
                            <div class="row align-items-stretch g-24">
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16">
                                                <span class="d-block bg-purple text-white rounded-2 px-1"
                                                      style="padding: 2px !important;">Nuevo Número</span>
                                            </div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                134</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-134%20(31-MAY-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                133</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-133%20(28-MAY-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                132</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-132%20(17-MAY-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                131</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-131%20(02-MAY-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                130</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-130%20(24-ABR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                129</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-129%20(23-ABR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                128</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-128%20(16-ABR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                127</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-127%20(09-ABR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                126</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-126%20(02-ABR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                125</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-125%20(19-MAR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                124</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-124%20(12-MAR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                123</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-123%20(05-MAR-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                122</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-122%20(27-FEB-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                121</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-121%20(20-FEB-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                120</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-120%20(13-FEB-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                119</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-119%20(06-FEB-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                118</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-118%20(31-ENE-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                117</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-117%20(25-ENE-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                116</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-116%20(22-ENE-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                115</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-115%20(18-ENE-24).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                114</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-114%20(15-DIC-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                113</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-113%20(15-DIC-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                112</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-112%20(05-DIC-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                111</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-111%20(28-NOV-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                110</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-110%20(21-NOV-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                109</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-109%20(14-NOV-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                108</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-108%20(07-NOV-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                107</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-107%20(31-OCT-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                106</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-106%20(24-OCT-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                105</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-105%20(17-OCT-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                104</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-104%20(10-OCT-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                104</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-104%20(10-OCT-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                103</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-103%20(03-OCT-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                102</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-102%20(26-SEP-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                101</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-101%20(19-SEP-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                100</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-100%20(12-SEP-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                99</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-99%20(05-SEP-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                98</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-98%20(30-AGO-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                97</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-97%20(23-AGO-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                96</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-96%20(09-AGO-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                95</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-95%20(06-JUL-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                94</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-94%20(30-JUN-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                93</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-93%20(09-JUN-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                92</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-92%20(08-JUN-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                91</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-91%20(09-MAY-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                90</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-90%20(02-MAY-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            {{--                                                                                                <div class="position-absolute top-0 end-0 p-16">--}}
                                            {{--                                                                                                    <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
                                            {{--                                                                                                </div>--}}
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                89</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-89%20(25-ABR-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                88</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-88%20(18-ABR-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                87</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-87%20(04-ABR-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                86</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-86%20(28-MAR-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                85</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-85%20(14-MAR-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                84</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-84%20(07-MAR-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                83</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-83%20(28-FEB-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                82</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-82%20(21-FEB-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>

                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            {{--                                                <div class="position-absolute top-0 end-0 p-16">--}}
                                            {{--                                                    <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
                                            {{--                                                </div>--}}
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                81</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-81%20(14-FEB-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16">
                                                {{--                                                    <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
                                            </div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                80</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-80%20(09-FEB-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16">
                                                {{--                                                    <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
                                            </div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                79</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-79%20(31-ENE-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16">
                                                {{--                                                    <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
                                            </div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                78</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-78 (16-ENE-23).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                77</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-77 (16-DIC-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                76</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-76 (15-DIC-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                75</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-75 (13-DIC-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                74</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-74 (08-DIC-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                73</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-73 (06-DIC-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                72</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-72 (01-DIC-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                71</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-71 (29-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                70</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-70 (24-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                69</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-69 (17-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                68</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-68 (15-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1">
                                                <img src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                     class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                67</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-67 (15-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                66</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-66 (10-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                65</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-65 (08-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                64</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-64-(04-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                63</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-63-(03-NOV-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                62</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-62-(27-OCT-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                61</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-61-(25-OCT-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                60</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-60-(20-OCT-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                59</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-59-(13-OCT-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                58</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-58-(11-OCT-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                57</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-57-(29-SEP-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                56</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-56-(27-SEP-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                55</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-55-(22-SEP-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                54</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-54-(20-SEP-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                53</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-53-(13-SEP-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                52</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-52-(19-AGO-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                51</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-51-(12-AGO-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                50</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-050-2022-08-04.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                49</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-049-2022-07-13.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                48</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-048-2022-06-27.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                47</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-047-2022-06-14.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                46</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-046-2022-06-01.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                45</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-045-2022-05-13.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                44</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-044-2022-05-12.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                43</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-043-2022-05-03.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                42</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-042-2022-05-03.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                41</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-041-2022-04-28.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                40</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-040-2022-04-26.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                39</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-039-2022-04-21.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                38</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-038-2022-04-19.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                37</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-037-2022-04-07.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                36</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-036-2022-04-05.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                35</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-035-2022-03-31.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                34</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-034-2022-03-29.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                33</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-033-2022-03-24.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                32</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-032-2022-03-22.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                31</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-031-2022-03-17.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                30</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-030-2022-03-15.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                29</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-029-2022-03-10.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                28</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-028-2022-03-03.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                27</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-027-2022-03-01.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                26</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-026-2022-02-24.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                25</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-025-2022-02-22.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                24</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-024-2022-02-19.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                23</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-023-2022-02-17.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                22</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-22-(15-FEB-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                21</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-21-(10-FEB-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                20</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-20-(03-FEB-22).pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                19</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-019-2021-12-27.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                18</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-018-2021-12-24.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                17</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-017-2021-12-14.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                16</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-016-2021-12-09.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                15</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-015-2021-12-07.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                14</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-014-2021-12-02.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                13</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-013-2021-11-30.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                12</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-012-2021-11-23.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                11</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-011-2021-11-18.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                10</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-010-2021-11-16.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                09</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-009-2021-11-11.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                08</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-008-2021-11-09.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                07</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-007-2021-11-08.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                06</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-006-2021-11-04.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                05</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-005-2021-10-28.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                04</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-004-2021-10-26.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                03</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-003-2021-10-07.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                02</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-002-2021-09-14.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-4">
                                    <div class="card-shadow-hover rounded-4">
                                        <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                            <figure class="mb-0 ratio ratio-1x1"><img
                                                    src="https://legislativoedomex.gob.mx/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                    class="img-fluid"></figure>
                                            <div class="position-absolute top-0 end-0 p-16"></div>
                                        </div>
                                        <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                                01</h4>
                                            <p class="fs-12 mb-16">Año 1</p><a
                                                href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/gaceta/GP-001-2021-09-09.pdf"
                                                target="_blank"
                                                class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                PDF</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="legislacion" role="tabpanel" aria-labelledby="legislacion-tab">
                            <div class="py-24 py-md-32">
                                <h3 class="fw-light mb-0"><b>Recursos Documentales</b></h3>
                                <h1 class="fw-bold">Legislación</h1>
                            </div>
                            <div class="tab-content" id="tabSesionContent">
                                <div class="tab-pane fade show active" id="resumen" role="tabpanel"
                                     aria-labelledby="resumen-tab">
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Constitución Politica
                                                        del Estado Libre y Soberano de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/1-CONSTITUCION LOCAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código Administrativo
                                                        del Estado de México </h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/2-CÓDIGO ADMINISTRATIVO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código Civil del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/3-CODIGO CIVIL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código de
                                                        Procedimientos Administrativos del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/4-CÓDIGO DE PROCEDIMIENTOS ADMINISTRATIVOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código de
                                                        Procedimientos Civiles del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/5-CÓDIGO DE PROCEDIMIENTOS CIVILES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código Electoral del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/6-CÓDIGO ELECTORAL DEL ESTADO DE MÉXICO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Codigo Financiero del
                                                        Estado de Mexico y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/7-CÓDIGO FINANCIERO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código para la
                                                        Biodiversidad del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/8-CÓDIGO-BIODIVERSIDAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Código Penal del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/9-ÓDIGO PENAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Acceso de las
                                                        Mujeres a una Vida Libre de Violencia del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/10-ACCESO-MUJERES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Apicultura del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/11-APICULTURA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Apoyo a
                                                        Migrantes del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/12-MIGRANTES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Arancel para el
                                                        Pago de Honorarios de Abogados y Costas Judiciales en el Estado
                                                        de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/13-ARANCEL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Asistencia
                                                        Social del Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/14-ASISTENCIA SOCIAL.DOC"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Bienes del
                                                        Estado de México y de sus Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/15-BIENES.DOC"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Cambio
                                                        Climatico del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/16-CAMBIO CLIMATICO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Ciencia y
                                                        Tecnologia del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/17-CIENCIA Y TECNOLOGIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Competitividad
                                                        y Ordenamiento Comercial del estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/18-COMPETITIVIDAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Contratación
                                                        Publica del Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/19-CONTRATACIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Cultura Fisica
                                                        y Deporte del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/20-CULTURA FISICA Y DEPORTE.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Defensoria
                                                        Publica del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/21-DEFENSORIA PUBLICA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Deposito Legal
                                                        para el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/22-DEPÓSITO LEGAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Derechos y
                                                        Cultura Indigena del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/23-DERECHOS Y CULTURA INDIGENA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Desarrollo
                                                        Social del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/24-DESARROLLO SOCIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Archivos y
                                                        Administración de Documentos del Estado de México y
                                                        Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/25-ARCHIVOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Educación del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/26-EDUCACIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado, de caracter municipal,
                                                        denominado Instituto Municipal de Planeación de Valle de Bravo,
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/27-PLANEACIÓN DE VALLE DE BRAVO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Eventos
                                                        Publicos del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/28-EVENTOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Expropiación
                                                        para el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/29-EXPROPIACIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Justicia
                                                        Cotidiana del estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/30-JUSTICIA COTIDIANA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Fiscalización
                                                        Superior del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/31-FISCALIZACIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Fomento de la
                                                        Cultura de la Legalidad del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/32-FOMENTO DE LA CULTURA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Fomento
                                                        Económico para el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/33-FOMENTO ECONÓMICO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Gobierno
                                                        Digital del Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/34-GOBIERNO DIGITAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Igualdad de
                                                        Trato y Oportunidades entre Mujeres y Hombres del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/35-IGUALDAD DE TRATO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Indulto del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/36-INDULTO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Ingresos de los
                                                        Municipios del Estado de México para el Ejercicio Fiscal del ano
                                                        2023</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/37-INGRESOS DE LOS MUNICIPIOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Ingresos del
                                                        Estado de México para el Ejercicio Fiscal del ano 2023</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/38-INGRESOS DEL ESTADO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Instituciones
                                                        de Asistencia Privada del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/39-INSTITUCIONES DE ASISTENCIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la
                                                        Declaración Especial de Ausencia por Desaparición de Personas
                                                        del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/40-DECLARACIÓN ESPECIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de la Comisión de
                                                        Derechos Humanos del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/41-COMISIÓN DE DERECHOS HUMANOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de la Juventud del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/42-JUVENTUD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de la Universidad
                                                        Autónoma del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/43-UNIVERSIDAD AUTÓNOMA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de los Derechos de
                                                        las Ninas, Ninos y Adolescentes del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/44-DERECHOS DE NINAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Mediación,
                                                        Conciliación y Promoción de la Paz Social para el Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/45-MEDIACIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Movilidad del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/46-MOVILIDAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Planeación del
                                                        Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/47-PLANEACION.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Prestación de
                                                        Servicios para la Atención, Cuidado y Desarrollo Integral
                                                        Infantil en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/48-PRESTACIÓN DE SERVICIOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Prevención del
                                                        Tabaquismo y de Protección ante la Exposición al Humo de Tabaco
                                                        en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/49-PREVENCIÓN DEL TABAQUISMO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Protección de
                                                        Datos Personales en Posesión de Sujetos Obligados del Estado de
                                                        México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/50-PROTECCIÓN DE DATOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de
                                                        Responsabilidades Administrativas del Estado de México y
                                                        Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/51-RESPONSABILIDADES ADMINISTRATIVAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Seguridad del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/52-SEGURIDAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Seguridad
                                                        Privada del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/53-SEGURIDAD PRIVADA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Seguridad
                                                        Social Para los Servidores Publicos del Estado de México y
                                                        Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/54-SEGURIDAD SOCIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Transparencia y
                                                        Acceso a la Información Publica del Estado de México y
                                                        Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/55-TRANSPARENCIA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley De Victimas Del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/56-VICTIMAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Vigilancia de
                                                        Medidas Cautelares y de la Suspensión Condicional del Proceso en
                                                        el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/57-VIGILANCIA-MEDIDAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Vivienda del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/58-VIVIENDA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Voluntad
                                                        Anticipada del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/59-VOLUNTAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Adulto Mayor
                                                        del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/60-ADULTO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Agua para el
                                                        Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/61-AGUA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Notariado del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/62-NOTARIADO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Periódico
                                                        Oficial “Gaceta del Gobierno” del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/63-PERIODICO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Seguro de
                                                        Desempleo para el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/64-SEGURO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Trabajo de los
                                                        Servidores Publicos del Estado y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/65-TRABAJO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Organica de la
                                                        Administración Publica del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/66-ADMINISTRACION PUBLICA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de la Fiscalia
                                                        General de Justicia del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/67-FISCALIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Organica del Poder
                                                        Judicial del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/68-PODER JUDICIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Organica del Poder
                                                        Legislativo del Estado Libre y Soberano de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/69-LOPLEGISLAT.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Organica Municipal
                                                        del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/70-ORGANICA MUNICIPAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la
                                                        Administración de Bienes Vinculados al Procedimiento Penal y a
                                                        la Extinción de Dominio para el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/71-BIENES VINCULADOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Atención y
                                                        Protección a Personas con la Condición del Espectro Autista en
                                                        el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/72-AUTISTA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la
                                                        Coordinación y Control de Organismos Auxiliares del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/73-ORGANISMOS AUXILIARES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Mejora
                                                        Regulatoria del Estado de México y sus Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/74-REGULATORIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Prevención
                                                        Social de la Violencia y la Delincuencia, con Participación
                                                        Ciudadana del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/75-PREVENCION SOCIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Prevención
                                                        y Erradicación de la Violencia Familiar del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/76-ERRADICACION.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la
                                                        Prevención, Tratamiento y Combate del Sobrepeso, la Obesidad y
                                                        los Trastornos Alimentarios del Estado de México y sus
                                                        Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/77-OBESIDAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Protección
                                                        de Sujetos que Intervienen en el Procedimiento Penal o de
                                                        Extinción de Dominio del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/78-SUJETOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Protección
                                                        del Maguey en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/79-MAGUEY.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la
                                                        Protección, Apoyo y Promoción a la Lactancia Materna del Estado
                                                        de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/80-LACTANCIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Inclusión
                                                        de las Personas en situación de Discapacidad del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/81-INCLUSION.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para Prevenir y
                                                        Sancionar la Tortura en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/82-TORTURA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para Prevenir,
                                                        Atender y Combatir el Delito de Secuestro en el Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/83-PREVENIR-ATENDER.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para Prevenir,
                                                        Atender, Combatir y Erradicar la Trata de Personas y para la
                                                        Protección y Asistencia a las Victimas en el Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/84-TRATA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para Prevenir,
                                                        Combatir y Eliminar Actos de Discriminación en el Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/85-DISCRIMINACION.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de caracter Estatal denominado
                                                        Universidad Tecnológica "Fidel Velazquez"</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/86-UNIVERSIDAD FIDEL VELAZQUEZ.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el Banco
                                                        de Tejidos del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/87-BANCO-TEJIDOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Instituto de Verificación Administrativa del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/88-VERIFICACION.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento de la Ley
                                                        de la Comisión de Impacto Estatal</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/89-COMISION DE IMPACTO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de Caracter Estatal denominado
                                                        Instituto Mexiquense de la Pirotecnia</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/90-PIROTECNIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de Caracter Estatal denominado
                                                        Instituto Mexiquense de la Vivienda Social</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/91-VIVIENDA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de caracter Estatal denominado
                                                        Tecnológico de Estudios Superiores de Ecatepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/92-TECNOLOGICO ECATEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de caracter Estatal denominado
                                                        Universidad Tecnológica de Nezahualcóyotl</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/93-UNIVERSIDAD-NEZAHUALCOYOTL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de caracter Estatal denominado
                                                        Colegio de Estudios Cientificos y Tecnológicos del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/94-COLEGIO DE ESTUDIOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de Caracter Estatal denominado
                                                        Tecnológico de Estudios Superiores de Coacalco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/95-TECNOLOGICO-COACALCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de Caracter Estatal denominado
                                                        Universidad Tecnológica de Tecamac</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/96-UNIVERSIDAD-TECAMAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que Crea el
                                                        Organismo Publico Descentralizado de Caracter Estatal Denominado
                                                        Hospital Regional de Alta Especialidad de Zumpango</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/97-HOSPITAL SUMPANGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de Caracter Municipal para el
                                                        Mantenimiento de Vialidades de Cuautitlan Izcalli</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/98-MANTENIMIENTO-CUAUTITLANI.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado de Caracter Municipal para el
                                                        Mantenimiento de Vialidades de Cuautitlan Izcalli</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/99-DEPORTE-CUAUTITLANI.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado "Instituto
                                                        Municipal de Cultura Fisica y Deporte de Toluca"</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/100-DEPORTE-TOLUCA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado “Instituto
                                                        Municipal de Cultura Fisica y Deporte de Chalco”, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/101-DEPORTE-CHALCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Colegio de
                                                        Bachilleres del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/102-COLEGIO DE BACHILLERES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Consejo Estatal
                                                        para el Desarrollo Integral de los Pueblos Indigenas del Estado
                                                        de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/103-PUEBLOS INDIGENAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Asociaciones
                                                        Publico-Privadas del Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/104-ASOCIACIONES PUBLICO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Zinacantepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/105-DEPORTE-ZINACANTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Almoloya de Juarez</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/106-DEPORTE-ALMOLOYA DE JUAREZ.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tenango del Aire</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/107-DEPORTE-TENANGO DEL AIRE.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Atlautla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/108-DEPORTE-ATLAUTLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Cocotitlan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/109-DEPORTE-COCOTITLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tepetlixpa</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/110-DEPORTE-TEPETLIXPA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ozumba</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/111-DEPORTE-OZUMAB.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Juchitepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/112-DEPORTE-JUCHITEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ecatzingo</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/113-DEPORTE-ECATZINGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Aculco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/114-DEPORTE-ACULCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Almoloya de Alquisiras</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/115-DEPORTE-ALMOLOYA DE ALQUISIRAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Almoloya del Rio</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/116-DEPORTE-ALMOLOYA DEL RIO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Amanalco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/117-DEPORTE-AMANALCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Apaxco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/118-DEPORTE-AXAPUSCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Atizapan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/119-DEPORTE-ATIZAPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Axapusco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/120-DEPORTE-AXAPUSCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Calimaya</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/121-DEPORTE-CALIMAYA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Capulhuac</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/122-DEPORTE-CAPULHUAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Isidro Fabela</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/123-DEPORTE-ISIDRO FABELA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Jilotzingo</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/124-DEPORTE-JILOTZINGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Malinalco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/125-DEPORTE-MALINALCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ocoyoacac</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/126-DEPORTE-OCOYOACAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ocuilan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/127-DEPORTE-OCUILAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Otumba</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/128-DEPORTE-OTUMBA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Papalotla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/129-DEPORTE-PAPALOTLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Rayón</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/130-DEPORTE-RAYON.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de San Antonio la Isla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/131-DEPORTE-SAN ANTONIO LA ISLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de San Martin de las Piramides</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/132-DEPORTE-SAN MARTIN DE LAS PIRAMIDES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de cultura fisica y deporte de San Mateo Atenco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/133-DEPORTE-SAN MATEO ATENCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tenancingo</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/134-DEPORTE-TENANCIGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tenango del Valle</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/135-DEPORTE-TENANGO DEL VALLE.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Texcaltitlan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/136-DEPORTE-TEXCALTITLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Texcalyacac</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/137-DEPORTE-TEXCALYACAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Timilpan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/138-DEPORTE-TIMILPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tonanitla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/139-DEPORTE-TONANITLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Villa Guerrero</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/140-DEPORTE-VILLA GUERRERO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Villa Victoria</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/141-DEPORTE-VILLA VICTORIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Xalatlaco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/142-DEPORTE-XALATLACO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Santo Tomas de los Platanos</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/143-DEPORTE-SANTO TOMAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado Denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Huixquilucan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/144-DEPORTE-HUIXQUILUCAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto de la
                                                        Función Registral del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/145-FUNCION REGISTRAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Zacualpan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/146-DEPORTE-ZACUALPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Zumpanhuacan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/147-DEPORTE-ZUMPAHUACAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Villa del Carbón</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/148-DEPORTE-VILLA DEL CARBON.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Valle de Bravo</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/149-DEPORTE-VALLE DE BRAVO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tepotzotlan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/150-DEPORTE-TEPOTZOTLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tepetlaoxtoc</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/151-DEPORTE-TEPETLAOXTOC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Teotihuacan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/152-DEPORTE-TEOTIHUACAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Temascaltepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/153-DEPORTE-TEMASCALTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Temamatla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/154-DEPORTE-TEMAMATLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Sultepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/155-DEPORTE-SULTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de San Simón de Guerrero</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/156-DEPORTE-SAN SIMON DE GUERRERO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Jocotitlan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/157-DEPORTE-JOCOTITLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ixtlahuaca</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/158-DEPORTE-IXTLAHUACA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ixtapan de la Sal</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/159-DEPORTE-IXTAPAN DE LA SAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Hueypoxtla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/160-DEPORTE-HUEYPOXTLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Chapultepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/161-DEPORTE-CHAPULTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Coatepec Harinas</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/162-DEPORTE-COATEPEC HARINAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Atlacomulco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/163-DEPORTE-ATLACOMULCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Amatepec</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/164-DEPORTE-AMATEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Acolman</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/165-DEPORTE-ACOLMAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Acambay</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/166-DEPORTE-ACAMBAY.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tonatico</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/167-DEPORTE-TONATICO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Cuautitlan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/168-DEPORTE-CUAUTITLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Chimalhuacan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/169-DEPORTE-CHIMALHUACAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Chiautla</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/170-DEPORTE-CHIAUTLA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Huehuetoca</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/171-DEPORTE-HUEHUETOCA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Nicolas Romero</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/172-DEPORTE-NICOLAS ROMERO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Polotitlan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/173-DEPORTE-POLOTITLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de San Felipe del Progreso</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/174-DEPORTE-SAN FELIPE DEL PROGRESO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Nextlalpan</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/175-DEPORTE-NEXTLALPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Mexicaltzingo</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/176-DEPORTE-MEXICALTZINGO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Luvianos</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/177-DEPORTE-LUVIANOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        organismo publico descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Joquicingo</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/178-DEPORTE-JOQUICINGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Villa de Allende, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/179-DEPORTE-VILLA DE ALLENDE.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ixtapaluca</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/180-DEPORTE-IXTAPALUCA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tlalmanalco</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/181-DEPORTE-TLALMANALCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Coacalco de Berriozabal</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/182-DFEPORTE-COACALCO DE BERRIOZABAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de La Paz, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/183-DEPORTE-LA PAZ.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Chiconcuac, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/184-DEPORTE-CHICONCUAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Otzoloapan, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/185-DEPORTE-OTZOLOAPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tlatlaya, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/186-DEPORTE-TLATLAYA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Jilotepec, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/187-DEPORTE-JILOTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ayapango, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/188-DEPORTE-AYAPANGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley por la que se crea
                                                        el Organismo Publico Descentralizado denominado Instituto
                                                        Municipal de Cultura Fisica y Deporte de Ecatepec de Morelos,
                                                        México (IMCUFIDEEM)</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/189-DEPORTE-MORELOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Nopaltepec, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/190-DEPORTE-NOPALTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Otzolotepec, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/191-DEPORTE-OTZOLOTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Teoloyucan, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/192-DEPORTE-TEOLOYUCAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Donato Guerra, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/193-DEPORTE-DONATO GUERRA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Temascalapa, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/194-DEPORTE-TEMASCALAPA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tultitlan, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/195-DEPORTE-TULTITLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Temascalcingo, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/196-DEPORTE-TEMASCALCINGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tezoyuca, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/197-DEPORTE-TEZOYUCA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de El Oro, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/198-DEPORTE-EL ORO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Zacazonapan, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/199-DEPORTE-ZACAZONAPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Valle de Chalco Solidaridad</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/200-DEPORTE-VALLE DE CHALCO SOLIDARIDAD.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Zumpango, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/201-DEPORTE-ZUMPANGO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Amecameca, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/202-DEPORTE-AMECAMECA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tultepec, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/203-DEPORTE-TULTEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Jaltenco, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/204-DEPORTE-JALTENCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Ixtapan del Oro, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/205-DEPORTE-IXTAPAN DEL ORO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Metepec, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/206-DEPORTE-METEPEC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tequixquiac, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/207-DEPORTE-TEQUIXQUIAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de San José del Rincón, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/208-DEPORTE-SANJOSEDELRINCON.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Naucalpan de Juarez</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/209-DEPORTE-NAUCALPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Jiquipilco, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/210-DEPORTE-TEJUPILCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Chicoloapan, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/211-DEPORTE-CHICOLOAPAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tianguistenco, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/212-DEPORTE-TIANGUISTENCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Temoaya, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/213-DEPORTE-TEMOAYA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Soyaniquilpan de Juarez,
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/214-DEPORTE-SOYANIQUILPAN DE JUAREZ.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Jiquipilco, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/215-DEPORTE-JIQUIPILCO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Xonacatlan, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/216-DEPORTE-XONACATLAN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Servicios
                                                        Educativos Integrados al Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/217-SERVICIOS EDUCATIVOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley en materia de
                                                        Desaparición Forzada de Personas y Desaparición Cometida por
                                                        Particulares para el Estado Libre y Soberano de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/218-DESAPARICIÓN FORZADA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que Crea el
                                                        Organismo Publico Descentralizado denominado Comisión para la
                                                        Protección contra Riesgos Sanitarios del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/219-PROTECCIÓN CONTRA RIESGOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Nezahualcóyotl, México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/220-DEPORTE-NEZAHUALCOYOTL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para Prevenir y
                                                        Atender el Acoso Escolar en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/221-ACOSO ESCOLAR.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea los
                                                        Organismos Publicos Descentralizados de Asistencia Social de
                                                        Caracter Municipal denominados "Sistemas Municipales para el
                                                        Desarrollo Integral de la Familia"</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/222-DIF.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que Regula el
                                                        Régimen de Propiedad en Condominio en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/223-CONDOMINIO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que Regula el Uso
                                                        de Tecnologias de la Información y Comunicación para la
                                                        Seguridad Publica del Estado de México.</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/224-INFORMACION.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que regula los
                                                        Centros de Asistencia Social y las Adopciones en el Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/225-ADOPCIONES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que Crea el
                                                        Organismo Publico Descentralizado Denominado Instituto de
                                                        Formación Continua, Profesionalización e Investigación del
                                                        Magisterio del Estado</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/226-MAGISTERIO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que transforma al
                                                        Órgano Desconcentrado denominado Instituto de Capacitación y
                                                        Adiestramiento para el Trabajo Industrial (ICATI), en Organismo
                                                        Descentralizado</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/227-ICATI.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Registral para el
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/228-REGISTRAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Reglamentaria de
                                                        las fracciones XXV y XXVI del articulo 61 de la Constitución
                                                        Politica del Estado Libre y Soberano de México.</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/229-REGLAMENTARIA DE LAS FRACCIONES.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Reglamentaria del
                                                        Articulo 88 Bis de la Constitución Politica del Estado Libre y
                                                        Soberano de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/230-REGLAMENTARIA 88 BIS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley sobre el Escudo y
                                                        el Himno del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/231-ESCUDO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Presupuesto de Egresos
                                                        del Gobierno del Estado de México para el ejercicio fiscal del
                                                        ano 2023</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/232-PRESUPUESTO DE  EGRESOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado “Instituto
                                                        Municipal de la Juventud de Ayapango”</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/233-JUVENTUD DE AYAPANGO.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Programa de
                                                        Derechos Humanos del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/234-PROGRAMA DE DERECHOS HUMANOS.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Sistema
                                                        Anticorrupción del Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/235-ANTICORRUPCIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley Organica del
                                                        Tribunal de Justicia Administrativa del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/236-TRIBUNAL DE JUSTICIA ADMIINISTRATIVA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Responsabilidad
                                                        Patrimonial para el Estado de México y Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/237-RESPONSABILIDAD PATRIMONIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la
                                                        Recuperación y Aprovechamiento de Alimentos del Estado de
                                                        México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/238-ALIMENTOS.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de la Mujer de Toluca</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/239-MUJER DE  TOLUCA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del Centro de
                                                        Conciliación Laboral del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/240-CONCILIACIÓN LABORAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley por el que se crea
                                                        el Organismo Publico Descentralizado denominado “Instituto
                                                        Municipal de Cultura Fisica y Deporte de Lerma"</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/241-DEPORTE DE LERMA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley por la que se crea
                                                        el Organismo Publico Descentralizado denominado Instituto
                                                        Municipal de Cultura Fisica y Deporte de Ecatepec de Morelos,
                                                        México (IMCUFIDEEM)</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/242-DEPORTE DE ECATEPEC.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley del organismo
                                                        publico descentralizado de caracter estatal denominado Instituto
                                                        de Politicas Publica del Estado de México y sus Municipios</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/243-POLITICAS PUBLICAS.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Amnistia del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/244-AMNISTIA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Turismo
                                                        Sostenible y Desarrollo Artesanal del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/245-TURISMO.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley para la Protección
                                                        Integral de Periodistas y Personas Defensoras de los Derechos
                                                        Humanos del Estado de México.</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/246-PERIODISTAS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea el
                                                        Organismo Publico Descentralizado denominado Instituto Municipal
                                                        de Cultura Fisica y Deporte de Tecamac</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/247-DEPORTE TECAMAC.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que crea al
                                                        organismo publico descentralizado de caracter municipal
                                                        denominado Universidad de Naucalpan de Juarez</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/248-UNIVERSIDAD DE NAUCALPAN DE JUAREZ.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de los Cuerpos de
                                                        Bomberos del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/249-BOMBEROS.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley que Regula el Uso
                                                        de la Fuerza Publica en el Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/250-FUERZA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento de
                                                        Comunicación Social e Imagen Institucional del Poder Legislativo
                                                        del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/A) REGLAMENTO DE COMUNICACIÓN SOCIAL.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento de
                                                        Transparencia y Acceso a la Información Publica del Poder
                                                        Legislativo del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/B) REGLAMENTO DE TRANSPARENCIA.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento del Poder
                                                        Legislativo del Estado Libre y Soberano de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/C-RPLEGISLAT.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento Interior
                                                        del Órgano Superior de Fiscalización del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/D) REGLAMENTO INTERIOR DEL ORGANO SUPERIOR DE FISCALIZACIÓN.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento Interno de
                                                        la Contraloria del Poder Legislativo del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/E) REGLAMENTO INTERNO DE LA CONTRALORIA.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento Interno del
                                                        Instituto de Estudios Legislativos del Poder Legislativo del
                                                        Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/F) REGLAMENTO INTERNO DEL INSTITUTO DE ESTUDIOS LEGISLATIVOS.doc"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Reglamento Interno de
                                                        la Secretaria de Administración y Finanzas del Poder Legislativo
                                                        del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/G) REGLAMENTO INTERNO DE LA SECRETARIA DE ADMINISTRACIÓN Y FINANZAS.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Gobierno de
                                                        Coalición, Reglamentaria de los articulos 61 fracción LI y 77
                                                        fracción XLVIII de la Constitución Politica del Estado Libre y
                                                        Soberano de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/251-COALICION.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <div class="row align-items-stretch gx-24">
                                            <div class="col-12 col-lg-12">
                                                <div class="bg-lighter rounded-4 h-100 p-32"><h4> Ley de Fomento y
                                                        Protección del Maiz Nativo como Patrimonio Biocultural y
                                                        Alimentario del Estado de México</h4>
                                                    <div class="d-flex"
                                                         style="float:right !important; padding-bottom: 7px;">
                                                        <a href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/legislacion/252-MAIZ.docx"
                                                           class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 flex-grow-1 flex-md-grow-0">
                                                            Descargar PDF</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="debates" role="tabpanel" aria-labelledby="debates-tab">
                            <div class="py-24 py-md-32">
                                <h3 class="fw-light mb-0"><b>Recursos Documentales</b></h3>
                                <h1 class="fw-bold">Diario de debates</h1>
                                <div class="row align-items-stretch g-24">

                                    <h3 class="fw-light mb-0"><b>Tomo I</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">04 de septiembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión de la Diputación Permanente de la “LX” Legislatura Constituida en Comisión Instaladora de la “LXI” Legislatura</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/01-04sep21j.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05 de septiembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Apertura del Primer Período Ordinario de Sesiones de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/02-05sep21a.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">09 de septiembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/03-09sep21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">14 de septiembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/04-14sep21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/05-05oct21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">07 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/06-07oct21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">12 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/07-12oct21c.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">13 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO I/08-13oct21c.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>




                                    <h3 class="fw-light mb-0"><b>Tomo II</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">14 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO II/09-14oct21c.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">15 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO II/10-15oct21c.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">18 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO II/11-18oct21c.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">26 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO II/12-26oct21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">28 de octubre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO II/13-28oct21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>





                                    <h3 class="fw-light mb-0"><b>Tomo III</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">04 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO III/14-04nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">09 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO III/15-09nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">11 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO III/16-11nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">16 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO III/17-16nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">18 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO III/18-18nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>





                                    <h3 class="fw-light mb-0"><b>Tomo IV</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">23 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO IV/19-23nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">30 de noviembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO IV/20-30nov21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>





                                    <h3 class="fw-light mb-0"><b>Tomo V</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">02 de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO V/21-02dic21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">07 de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO V/22-07dic21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">09 de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO V/23-09dic21.pdf"
                                                    target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>






                                    <h3 class="fw-light mb-0"><b>Tomo VI</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">14
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VI/24-14dic21.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">17
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Primer Período
                                                    Ordinario de Sesiones de la “LXI” Legislatura del Estado de
                                                    México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VI/25-17dic21.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">17
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Instalación de la Diputación Permanente de la LXI
                                                    Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VI/26-17dic21i.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">24
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Primer Período
                                                    Ordinario de Sesiones de la “LXI” Legislatura del Estado de
                                                    México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VI/27-24dic21p.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">27
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Junta previa de la “LXI” Legislatura del Estado
                                                    de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VI/28-27dic21j.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">27
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Apertura del Primer Período
                                                    Extraordinario de Sesiones de la LXI Legislatura del Estado de
                                                    México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VI/29-27dic21a.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo VII</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">27
                                                    de diciembre 21</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VII/30-27dic21.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">29
                                                    de enero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Primer Período
                                                    Extraordinario de Sesiones de la LXI Legislatura del Estado de
                                                    México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VII/31-29ene22c.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">31
                                                    de enero 22</h4>
                                                <p class="fs-12 mb-16">Junta Previa de la “LXI” Legislatura del Estado
                                                    de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VII/32-31ene22j.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">31
                                                    de enero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Apertura del Segundo Período
                                                    Ordinario de Sesiones de la LXI Legislatura del Estado de México</p>
                                                <a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VII/33-31ene22a.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">03
                                                    de febrero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VII/34_03_FEB_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">10
                                                    de febrero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VII/35_10_FEB_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo VIII</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">15
                                                    de febrero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VIII/36_15_FEB_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">17
                                                    de febrero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VIII/37_17_FEB_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">22
                                                    de febrero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO VIII/38_22_FEB_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo IX</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">24
                                                    de febrero 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO IX/39_24_FEB_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">01
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO IX/40_01_MAR_2022.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">03
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO IX/41-03mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo X</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">10
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO X/42-10mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">15
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO X/43-15mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">17
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO X/44-17mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">22
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO X/45-22mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XI</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">24
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XI/46-24mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">29
                                                    de marzo 22|</h4>
                                                <p class="fs-12 mb-16">Sesión de la Diputación Permanente de la “LXI”
                                                    Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XI/47-29mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">31
                                                    de marzo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XI/48-31mar22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05
                                                    de abril 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XI/49-05abr22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XII</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">07
                                                    de abril 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XII/50-07abr22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">19
                                                    de abril 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XII/51-19abr22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">21
                                                    de abril 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XII/52-21abr22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">26
                                                    de abril 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XII/53-26abr22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">28
                                                    de abril 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XII/54-28abr22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XIII</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">03
                                                    de mayo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIII/55-03may22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05
                                                    de mayo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIII/56-05may22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">12
                                                    de mayo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIII/57-12may22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">13
                                                    de mayo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIII/58-13may22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XIV</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">15
                                                    de mayo 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Segundo Período
                                                    Ordinario de Sesiones de la LXI Legislatura del Estado de México</p>
                                                <a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/59-15may22c.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">15
                                                    de mayo 22</h4>
                                                <p class="fs-12 mb-16">Sesión de instalación de la Diputación Permanente
                                                    de la LXI Legislatura del Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/60-15may22i.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">13
                                                    de junio 22</h4>
                                                <p class="fs-12 mb-16">Sesión de la diputación Permanente de la LXI
                                                    Legislatura del Estado de México.</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/61-13jun22p.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">01
                                                    de julio 22</h4>
                                                <p class="fs-12 mb-16">Sesión de la diputación Permanente de la LXI
                                                    Legislatura del Estado de México.</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/62-01jul22p.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">13
                                                    de julio 22</h4>
                                                <p class="fs-12 mb-16">Sesión de la diputación Permanente de la LXI
                                                    Legislatura del Estado de México.</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/63-13jul22p.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">10
                                                    de agosto 22</h4>
                                                <p class="fs-12 mb-16">Sesión de la diputación Permanente de la LXI
                                                    Legislatura del Estado de México.</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/64-10ago22p (1).pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">12
                                                    de agosto 22</h4>
                                                <p class="fs-12 mb-16">Sesión de la diputación Permanente de la LXI
                                                    Legislatura del Estado de México.</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/65-12ago22p.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Junta Previa de la “LXI” Legislatura del Estado
                                                    de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/66-05sep22j.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Apertura del Tercer Período
                                                    Ordinario de Sesiones de la LXI Legislatura del Estado de México</p>
                                                <a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/67-05sep22a.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIV/68-05sep22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XV</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">13
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Segundo Período
                                                    Ordinario de Sesiones de la LXI Legislatura del Estado de México</p>
                                                <a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XV/69-13sep22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">20
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Segundo Período
                                                    Ordinario de Sesiones de la LXI Legislatura del Estado de México</p>
                                                <a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XV/70-20sep22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">22
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de Clausura del Segundo Período
                                                    Ordinario de Sesiones de la LXI Legislatura del Estado de México</p>
                                                <a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XV/71-22sep22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XVI</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">27
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVI/72-27sep22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">29
                                                    de septiembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVI/73-29sep22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">03
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVI/74-03oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">04
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVI/75-04oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XVII</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">05
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVII/76-05oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">06
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVII/77-06oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">11
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVII/78-11oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">13
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVII/79-13oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XVIII</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">20
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVIII/80-20oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">25
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVIII/81-25oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">27
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVIII/82-27oct22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">27
                                                    de octubre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XVIII/83-03nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XIX</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">08
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIX/84-08nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">10
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Solemne de la “LXI” Legislatura del Estado
                                                    de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIX/85-10nov22s.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">10
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIX/86-10nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">15
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIX/87-15nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">17
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Especial de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XIX/88-17nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                    <h3 class="fw-light mb-0"><b>Tomo XX</b></h3>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">24
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Especial de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XX/89-24nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img
                                                        src="https://legislativoedomex.gob.mx/storage/img/fotos/dialogopublico/DIALOGO_2023-06-02.png"
                                                        class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">29
                                                    de noviembre 22</h4>
                                                <p class="fs-12 mb-16">Sesión Deliberante de la “LXI” Legislatura del
                                                    Estado de México</p><a
                                                    href="http://www.secretariadeasuntosparlamentarios.gob.mx/mainstream/Actividad/Diario/LXI/TOMO XX/90-29nov22.pdf"
                                                    target="_blank"
                                                    class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                                    PDF</a></div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
{{--                    <div class="tab-pane fade" id="minutas" role="tabpanel" aria-labelledby="minutas-tab">--}}
{{--                        <div class="py-24 py-md-32">--}}
{{--                            <h3 class="fw-light mb-0"><b>Recursos Documentales</b></h3>--}}
{{--                            <h1 class="fw-bold">Minutas del H.Congreso de la Unión <br> presentadas ante la LXI--}}
{{--                                Legislatura</h1>--}}
{{--                            <div class="row align-items-stretch g-24">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade" id="minutas" role="tabpanel" aria-labelledby="minutas-tab">--}}
{{--                        <div class="py-24 py-md-32">--}}
{{--                            <h3 class="fw-light mb-0"><b>Recursos Documentales</b></h3>--}}
{{--                            <h1 class="fw-bold">Minutas del H.Congreso de la Unión <br> presentadas ante la LXI--}}
{{--                                Legislatura</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="tab-pane fade" id="dialogo" role="tabpanel" aria-labelledby="dialogo-tab">
                        <div class="py-24 py-md-32">
                            <h3 class="fw-light mb-0"><b>Recursos Documentales</b></h3>
                            <h1 class="fw-bold">Diálogo</h1>
                        </div>

                        <div class="row align-items-stretch g-24">
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1">
                                            <img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/banner-gif.gif"
                                                class="img-fluid">
                                        </figure>
                                        <div class="position-absolute top-0 end-0 p-16">
                                            <span class="d-block bg-purple text-white rounded-2 px-1"
                                                  style="padding: 2px !important;">Nuevo Número</span>
                                        </div>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            14</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo14.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>


                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1">
                                            <img src="https://legislativoedomex.gob.mx/storage/img/fotos/banners/Gif Revista Dialogo13.gif"
                                                 class="img-fluid">
                                        </figure>
{{--                                        <div class="position-absolute top-0 end-0 p-16">--}}
{{--                                            <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 13</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a data-bs-toggle="modal" data-bs-target="#exampleModal"  target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">¡Abrir!</a></div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" style="opacity: .8;
filter: alpha(opacity=80);">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button> -->
                                        </div>
                                        <div class="modal-body">
                                            <!-- <iframe src ="https://legislativoedomex.gob.mx/storage/documentos/banners/RevistaDia%CC%81logo12.pdf" width="100%" height="600px"></iframe> -->
                                            <embed
                                                src="https://indd.adobe.com/embed/f5f32ada-6351-472d-9736-57858e8c9f69?startpage=1&allowFullscreen=true"
                                                frameborder="0" width="100%" height="600px">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1">
                                            <img src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/Gif Diálogo 12.gif"
                                                 class="img-fluid">
                                        </figure>
{{--                                        <div class="position-absolute top-0 end-0 p-16">--}}
{{--                                            <span class="d-block bg-purple text-white rounded-2 px-1" style="padding: 2px !important;">Nuevo Número</span>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 12</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDi%C3%A1logo12.pdf"
                                                                           target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1">
                                            <img src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_II.png"
                                                 class="img-fluid">
                                        </figure>
                                        <div class="position-absolute top-0 end-0 p-16">

                                        </div>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            11</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDi%C3%A1logo11-1.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1">
                                            <img src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-15.png"
                                                 class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            10</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDi%C3%A1logo_10%201.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-14.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            09</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo09.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-13.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            08</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo08.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-12.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            07</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo07.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-11.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            06</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo06.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-10.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            05</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo05.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-09.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            04</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo04.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-07.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            03</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo03.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-06.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            02</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo02.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div class="card-shadow-hover rounded-4">
                                    <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                        <figure class="mb-0 ratio ratio-1x1"><img
                                                src="https://legislativoedomex.gob.mx/storage/img/fotos/revistas/DIALOGO_2023-05.png"
                                                class="img-fluid"></figure>
                                    </div>
                                    <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número
                                            01</h4>
                                        <p class="fs-12 mb-16">Año 1</p><a
                                            href="https://legislacion.legislativoedomex.gob.mx/storage/documentos/revistadialogo/RevistaDialogo01.pdf"
                                            target="_blank"
                                            class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar
                                            PDF</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="d-md-none px-48 py-24"><a id="backToTop"
                                          class="btn btn-light d-flex align-items-center justify-content-center rounded-4 py-16"><i
                class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a></div>
@endsection
