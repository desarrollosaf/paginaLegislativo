@extends('pages.layouts.app')
@section('content')
    <div class="container-xl">
        <h3 class="fw-bold">Recursos Documentales</h3>
        <h1 class="fw-bold">Gacetas</h1>
        <div class="sesiones-publicas row g-4">
                    <div class="py-24">
                        <div class="row gx-24">
                            <div class="col-12 col-lg-3 col-xl-2">
                                <nav class="side-navbar nav border-bottom border-lg-0 border-light py-12 py-lg-32 px-24 px-lg-0 mx-n24 mx-lg-0"
                                     id="tabDiputado" role="tablist">
                                    <a href="{{route("gaceta.index")}}" class="nav-link rounded-4 me-12 active" id="perfil-tab"
                                       data-bs-toggle="tab" data-bs-target="#perfil" type="button"
                                       role="tab" aria-controls="home" aria-selected="true"><i
                                            class="icon-perfil d-none d-lg-block"></i> <span>Gacetas</span>
                                    </a>
                                    <a class="nav-link rounded-4 me-12" id="iniciativas-tab" data-bs-toggle="tab"
                                       data-bs-target="#iniciativas" type="button" role="tab" aria-controls="profile"
                                       aria-selected="false"><i class="icon-bulb d-none d-lg-block">
                                        </i>
                                        <span>Legislación</span>
                                    </a>
                                    <a class="nav-link rounded-4" id="comunicados-tab" data-bs-toggle="tab"
                                       data-bs-target="#comunicados" type="button" role="tab" aria-controls="contact"
                                       aria-selected="false"><i class="icon-chat d-none d-lg-block"></i>
                                        <span>Diario de debates</span>
                                    </a>
                                    <a class="nav-link rounded-4" id="comunicados-tab" data-bs-toggle="tab"
                                       data-bs-target="#comunicados" type="button" role="tab" aria-controls="contact"
                                       aria-selected="false"><i class="icon-chat d-none d-lg-block"></i>
                                        <span>Minutas del congreso</span>
                                    </a>
                                    <a href="{{route("revista.index")}}" class="nav-link rounded-4" id="comunicados-tab" data-bs-toggle="tab"
                                       data-bs-target="#comunicados" type="button" role="tab" aria-controls="contact"
                                       aria-selected="false"><i class="icon-chat d-none d-lg-block"></i>
                                        <span>Dialogo publico</span>
                                    </a>
                                </nav>
                            </div>
                            <div class="col-12 col-lg-9 col-xl-10">
                                <div class="row align-items-stretch g-24">
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 78</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-78 (16-ENE-23).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 77</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-77 (16-DIC-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 76</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-76 (15-DIC-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 75</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-75 (13-DIC-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 74</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-74 (08-DIC-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 73</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-73 (06-DIC-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 72</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-72 (01-DIC-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 71</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-71 (29-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 70</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-70 (24-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 69</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-69 (17-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 68</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-68 (15-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 67</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-67 (15-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 66</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-66 (10-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 65</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-65 (08-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 64</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-64-(04-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 63</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-63-(03-NOV-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 62</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-62-(27-OCT-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 61</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-61-(25-OCT-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 60</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-60-(20-OCT-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 59</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-59-(13-OCT-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 58</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-58-(11-OCT-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 57</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-57-(29-SEP-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 56</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-56-(27-SEP-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 55</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-55-(22-SEP-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 54</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-54-(20-SEP-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 53</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-53-(13-SEP-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 52</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-52-(19-AGO-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 51</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-51-(12-AGO-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 50</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-050-2022-08-04.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 49</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-049-2022-07-13.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 48</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-048-2022-06-27.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 47</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-047-2022-06-14.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 46</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-046-2022-06-01.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 45</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-045-2022-05-13.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 44</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-044-2022-05-12.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 43</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-043-2022-05-03.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 42</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-042-2022-05-03.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 41</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-041-2022-04-28.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 40</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-040-2022-04-26.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 39</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-039-2022-04-21.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 38</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-038-2022-04-19.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 37</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-037-2022-04-07.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 36</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-036-2022-04-05.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 35</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-035-2022-03-31.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 34</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-034-2022-03-29.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 33</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-033-2022-03-24.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 32</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-032-2022-03-22.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 31</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-031-2022-03-17.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 30</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-030-2022-03-15.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 29</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-029-2022-03-10.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 28</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-028-2022-03-03.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 27</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-027-2022-03-01.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 26</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-026-2022-02-24.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 25</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-025-2022-02-22.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 24</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-024-2022-02-19.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 23</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-023-2022-02-17.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 22</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-22-(15-FEB-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 21</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-21-(10-FEB-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 20</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-20-(03-FEB-22).pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 19</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-019-2021-12-27.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 18</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-018-2021-12-24.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 17</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-017-2021-12-14.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 16</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-016-2021-12-09.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 15</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-015-2021-12-07.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 14</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-014-2021-12-02.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 13</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-013-2021-11-30.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 12</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-012-2021-11-23.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 11</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-011-2021-11-18.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 10</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-010-2021-11-16.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 09</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-009-2021-11-11.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 08</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-008-2021-11-09.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 07</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-007-2021-11-08.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 06</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-006-2021-11-04.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 05</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-005-2021-10-28.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 04</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-004-2021-10-26.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 03</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-003-2021-10-07.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 02</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-002-2021-09-14.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-lg-4">
                                        <div class="card-shadow-hover rounded-4">
                                            <div class="bg-lighter rounded-top-4 position-relative h-100 w-100">
                                                <figure class="mb-0 ratio ratio-1x1"><img src="https://legislativoedomex.com/storage/img/fotos/gacetas/GACETA_2023_v2-04-04.png"
                                                                                          class="img-fluid"></figure>
                                                <div class="position-absolute top-0 end-0 p-16"></div>
                                            </div>
                                            <div class="border border-top-0 rounded-bottom-4 p-16"><h4 class="fs-16">Número 01</h4>
                                                <p class="fs-12 mb-16">Año 1</p><a href="https://legislativoedomex.gob.mx/storage/documentos/gaceta/GP-001-2021-09-09.pdf"
                                                                                   target="_blank" class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">Descargar PDF</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="px-48 py-24">
                <a id="backToTop"
                   class="btn btn-light d-flex align-items-center justify-content-center d-md-none rounded-4 py-16">
                    <i class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a>
            </div>
        </div>

    </div>
@endsection
