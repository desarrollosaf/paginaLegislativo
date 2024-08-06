@extends('pages.layouts.app')
@section('content')
    <main>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
            <title>Palacio Legislativo</title>
            <script defer="defer" src="../main.js"></script>
            <link href="../main.css" rel="stylesheet">
        </head>

        <body>
            <header>



                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="search-form w-100 px-40 d-none d-lg-flex align-items-center" role="search"><input
                                    class="form-control search-control h-52 border-0 ps-56 pe-32 rounded-4" type="search"
                                    placeholder="Explora tu legislativo" aria-label="Search"></form>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#legislatura"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Legislatura</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/diputado">Diputadas y diputados</a></li>
                                        <li><a class="dropdown-item" href="/legislatura">Dependencias</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#actividad"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Actividad</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/sesiones-publicas">Sesiones públicas</a></li>
                                        <li><a class="dropdown-item" href="/asuntos">Asuntos</a></li>
                                        <li><a class="dropdown-item" href="/resoluciones">Resoluciones</a></li>
                                        <li><a class="dropdown-item" href="/recursos-documentales">Recursos documentales</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" haref="/transparencia">Transparencia</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                <div class="container-xl py-5">
                    <div class="row gx-4">
                        <div class="col-lg-3 col-xl-2 d-none d-lg-block">
                            <nav class="side-navbar nav flex-column" id="tabAsuntos" role="tablist"><a
                                    class="nav-link rounded-4 active" id="iniciativas-tab" data-bs-toggle="tab"
                                    data-bs-target="#iniciativas" type="button" role="tab" aria-controls="home"
                                    aria-selected="true"><i class="icon-bulb"></i> <span>Iniciativas</span> </a><a
                                    class="nav-link rounded-4" id="acuerdos-tab" data-bs-toggle="tab"
                                    data-bs-target="#boletines" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false"><i class="icon-chat"></i> <span>Puntos de acuerdo</span></a></nav>
                        </div>
                        <div class="col-12 col-lg-9 col-xl-10 mb-4">
                            <h4 class="fw-light mb-0">Asuntos</h4>
                            <div class="tab-content" id="tabAsuntosContent">
                                <div class="tab-pane fade show active" id="iniciativas" role="tabpanel"
                                    aria-labelledby="iniciativas-tab">
                                    <h1 class="display-4 fw-bold">Iniciativas</h1>
                                    <div class="bg-lighter rounded-4 mb-4 p-4">
                                        <div class="fs-5">
                                            <p>Escrito de solicitud de diferendo limítrofe entre los municipios de Temoaya y
                                                Toluca.</p>
                                        </div>
                                        <div class="text-secondary my-4">
                                            <hr>
                                        </div>
                                        <div class="d-flex">
                                            <div class="d-flex bg-light rounded-3 p-16 me-16"><i></i> <span>Ayuntamiento del
                                                    Municipio de Temoaya, México.</span></div>
                                            <div class="d-flex bg-light rounded-3 p-16"><i></i> <span>13 de Junio de
                                                    2022</span>
                                            </div>
                                        </div>
                                        <div class="text-secondary my-4">
                                            <hr>
                                        </div>
                                        <div class="mb-4">
                                            <div class="bg-light rounded-4 p-4">
                                                <div class="status-asunto mx-1"><span class="w-20"></span></div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between fw-bold mx-1 mt-3">
                                                    <span>Iniciativa</span> <span>Discusión</span> <span>Aprobación</span>
                                                    <span>Sanción</span> <span>Publicación</span> <span>Iniciación</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-content-center justify-content-between">
                                            <div class="d-flex bg-light rounded-3 p-16 me-16"><i></i> <span>Ayuntamiento
                                                    del
                                                    Municipio de Temoaya, México.</span></div><a href=""
                                                class="btn btn-outline-dark btn-lg border-2 rounded-4 fs-6 py-16 px-5">Descargar
                                                iniciativa (PDF)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="acuerdos" role="tabpanel"
                                    aria-labelledby="acuerdos-tab">
                                    <h1 class="display-4 fw-bold">Puntos de acuerdo</h1>
                                    <div class="mb-4">
                                        <div class="comunicado-destacado ratio ratio-1x1 rounded-4 overflow-hidden"><img
                                                src=".././images/noticia-1.jpg" alt="" class="rounded-4">
                                            <div
                                                class="d-flex flex-column align-items-start justify-content-end p-4 col-lg-8 text-white">
                                                <h4>Buscan consolidar educación para personas indígenas</h4>
                                                <p>En presencia de la y los integrantes de la Jucopo, la diputada Mónica
                                                    Álvarez
                                                    dio por recibido el informe en tiempo y forma.</p><a
                                                    class="btn btn-dark btn-lg rounded-4 fs-6 py-16">Abrir Comunicado</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comunicado bg-light rounded-4 overflow-hidden mb-4">
                                        <div class="row gx-0">
                                            <div class="col-12 col-lg-5">
                                                <figure class="ratio ratio-16x9 mb-0"><img src=".././images/noticia-1.jpg"
                                                        alt=""></figure>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="p-4">
                                                    <h4>Invita Rosario Elizalde a Feria del Aguacate y la trucha en Donato
                                                        Guerra</h4>
                                                    <p>En presencia de la y los integrantes de la Jucopo, la diputada Mónica
                                                        Álvarez dio por recibido el informe en tiempo y forma.</p><a
                                                        href=""
                                                        class="btn btn-outline-dark btn-lg border-2 rounded-4 fs-6 py-16 px-5">Abrir
                                                        comunicado</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comunicado bg-light rounded-4 overflow-hidden mb-4">
                                        <div class="row gx-0">
                                            <div class="col-12 col-lg-5">
                                                <figure class="ratio ratio-16x9 mb-0"><img src=".././images/noticia-1.jpg"
                                                        alt=""></figure>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="p-4">
                                                    <h4>Invita Rosario Elizalde a Feria del Aguacate y la trucha en Donato
                                                        Guerra</h4>
                                                    <p>En presencia de la y los integrantes de la Jucopo, la diputada Mónica
                                                        Álvarez dio por recibido el informe en tiempo y forma.</p><a
                                                        href=""
                                                        class="btn btn-outline-dark btn-lg border-2 rounded-4 fs-6 py-16 px-5">Abrir
                                                        comunicado</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer></footer>
        </body>

        </html>
    @endsection
