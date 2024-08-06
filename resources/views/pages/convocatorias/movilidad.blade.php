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
        <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=header&aut=legislativoedomex.gob.mx" type="text/javascript"></script>
        <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=body&aut=legislativoedomex.gob.mx" type="text/javascript"></script>
        <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=769342E7-EFCD-40AF-9F5C-D77DFD3DAE62&tipo=footer&aut=legislativoedomex.gob.mx" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="escudo"><img id="escudo" src="{{asset("storage/images/shield-lg.png")}}"></div>
<header>
    <nav class="navbar navbar-expand-xl">
        <div class="container-xl position-lg-relative d-flex align-items-center justify-content-between py-16 py-lg-0">
            <a class="navbar-brand d-flex align-items-center position-relative" href="{{asset("/")}}"><img
                    src={{asset("storage/images/congreso_edomex_grayscale.svg")}} alt=""> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            @include("pages.layouts.menu")
        </div>
    </nav>
</header>

<style>
    table, th, td {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: .5em;
    }
</style>
<main>
    <div class="container-xl">
        <div class="py-24">
            <div class="row gx-24">
                <div class="col-12 col-lg-3 col-xl-2">
                    <nav class="side-navbar nav border-bottom border-lg-0 border-light py-12 py-lg-32 px-24 px-lg-0 mx-n24 mx-lg-0" id="tabDiputado" role="tablist">

                        <a class="nav-link rounded-4 me-12 active" id="convocatoria-tab" data-bs-toggle="tab"
                           data-bs-target="#convocatoria" type="button" role="tab" aria-controls="profile"
                           aria-selected="true">
                            <img class="hoverable" src="./storage/images/icons_pagina-05.svg" width="20px"><span
                                style="padding-left: 10px !important;">Convocatoria</span>
                        </a>

                        <a class="nav-link rounded-4 me-12 " id="informacion-tab" data-bs-toggle="tab"
                           data-bs-target="#informacion" type="button"  role="tab" aria-controls="profile"
                           aria-selected="true">
                            <img class="hoverable" src="./storage/images/icons_pagina-01.svg" width="20px"><span
                                style="padding-left: 10px !important;">Información</span>
                        </a>

                        <a class="nav-link rounded-4 me-12 " id="protocolo-tab" data-bs-toggle="tab"
                           data-bs-target="#protocolo" type="button" role="tab" aria-controls="profile"
                           aria-selected="true">
                            <img class="hoverable" src="./storage/images/icons_pagina-03.svg" width="20px"><span
                                style="padding-left: 10px !important;">Protocolo</span>
                        </a>
                    </nav>
                </div>
                <div class="col-12 col-lg-9 col-xl-10" style="text-align: justify; font-family: Poppins !important; font-size: 14px;">
                    <div class="py-24 py-md-32">
                        <div class="tab-content" id="tabDiputadoContent">

                            <div class="tab-pane fade show active" id="convocatoria" role="tabpanel" aria-labelledby="convocatoria-tab">
                                <div class="mb-24">
                                    <div class="card-iniciativa position-relative bg-lighter rounded-4 p-16 pt-md-40 p-md-32 mb-24" >
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0"> <b>Convocatoria</b></h2>
                                            <p>
                                                De conformidad con la Convención sobre los Derechos de las Personas con discapacidad,
                                                El Honorable Congreso del Estado Libre y Soberano de México a través de  las Comisiones
                                                Unidas de Comunicaciones y Transportes y de Gobernación y Puntos Constitucionales convoca
                                                a las organizaciones que representan a Personas con discapacidad, incluidas las niñas y
                                                los niños con discapacidad e identificadas como neuro diversas,  a participar en la consulta
                                                que se llevará a cabo para la construcción de la Ley de Movilidad y Seguridad Vial del
                                                Estado de México, de acuerdo con las siguientes:
                                            </p>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0"> <b>B A S E S</b></h2>
                                        <p>
                                            <b>PRIMERA.</b> Se convoca a Personas con discapacidad, y a las organizaciones que las representan, a participar
                                            en la consulta para la construcción de la Ley de Movilidad y Seguridad Vial del Estado de México, con integrantes
                                            de las Comisiones Unidas de Comunicaciones y Transportes y de Gobernación y Puntos Constitucionales.
                                        </p>
                                        <p>
                                            Para efectos de esta convocatoria, se adopta la definición de “organizaciones de Personas con discapacidad”
                                            establecida por el Comité de los Derechos de las Personas con discapacidad en los numerales 11 y 24 de la
                                            Observación General número 7 sobre la participación de las Personas con discapacidad.
                                            <a href="#_ftn1" name="_ftnref1"><sup>[1]</sup></a>Así como con lo establecido
                                            en el párrafo 3 del artículo 4 de la Convención sobre los Derechos de las Personas con discapacidad.<a href="#_ftn2" name="_ftnref2"><sup>[2]</sup></a>
                                        </p>
                                        <p>
                                            <b>SEGUNDA.</b> El objeto de la consulta será escuchar y recibir las observaciones y propuestas sobre los artículos que
                                            a los grupos poblacionales objetos de esta consulta interesan, emanados del proyecto de Ley derivado del trabajo
                                            de análisis de  las Comisiones Unidas de Comunicaciones y Transportes y de Gobernación y Puntos Constitucionales
                                            sobre las siguientes propuestas legislativas:
                                        </p>
                                        <p>
                                        <ol>
                                            <li>
                                                Iniciativa por el que se expide la Ley de Movilidad y Seguridad Vial del Estado de México y sus Municipios y se abroga
                                                la Ley de Movilidad del Estado de México presentada por los Diputados Adrián Manuel Galicia Salceda y Nazario Gutiérrez Martínez.
                                            </li><br>
                                            <li>
                                                Iniciativa con Proyecto de Decreto por el que se adicionan y reforman  diversas  disposiciones  del  Código  Financiero
                                                del  Estado  de México y Municipios, y del Código Administrativo del Estado de México, a efecto  de  regular  la  expedición
                                                de  las  licencias  permanentes  de automovilista y motociclista presentada por el Diputado Camilo Murillo Zavala.
                                            </li><br>
                                            <li>
                                                Iniciativa con proyecto de Decreto por el que se adiciona el inciso G) y los numerales 1, 2, 3 y 4 a la fracción VIII
                                                del artículo 87 del Código Financiero del Estado de México y Municipios a fin de implementar la Licencia Integral
                                                (Automovilista y Motociclista) presentada por la Diputada Rosa María Zetina González.
                                            </li><br>
                                            <li>
                                                Iniciativa con Proyecto de Decreto por el que se adicionan y reforman  diversas  disposiciones  del  Código  Financiero
                                                del  Estado  de México y Municipios, y del Código Administrativo del Estado de México, a efecto  de  regular  la  expedición
                                                de  las  licencias  permanentes  de automovilista y motociclista presentada por el Diputado Camilo Murillo Zavala y Nazario
                                                Gutiérrez Martínez.
                                            </li><br>
                                            <li>
                                                Iniciativa con Proyecto de decreto por el que se reforman, el segundo párrafo del artículo 7.27, 17.50, y 17.52 del
                                                Código Administrativo del Estado de México; y la fracción I del artículo 18 de la Ley del Adulto Mayor del Estado
                                                de México presentada por el Diputado Dionicio Jorge García Sánchez.
                                            </li><br>
                                            <li>
                                                Iniciativa con Proyecto de Decreto mediante la cual se reforman y adicionan diversas disposiciones  de  la  Ley
                                                de  Movilidad  del  Estado  de  México presentada por la Diputada  Ingrid K. Schemelensky  Castro,  Diputado
                                                Enrique Vargas  del  Villar y  Diputado  Francisco Brian  Rojas  Cano.
                                            </li><br>
                                            <li>
                                                Iniciativa con Proyecto de Decreto por el que se reforma el octavo párrafo de la  fracción  xi  del  artículo
                                                del  artículo  5  y  el  inciso  a)  de  la fracción ii del artículo 139 de la Constitución del Estado Libre
                                                y Soberano de México presentada por las Diputadas María Luisa Mendoza Mondragón y Claudia Desiree Morales Robledo.
                                            </li><br>
                                            <li>
                                                Iniciativa con proyecto de decreto que reforma el artículo 5 sexagésimo cuarto párrafo de la Constitución
                                                Política del Estado Libre y Soberano de México; expide la Ley de Movilidad y Seguridad Vial del Estado de México
                                                y sus Municipios y se abroga la Ley de Movilidad del Estado de México y se abroga la Ley de Movilidad del Estado
                                                de México; y reforma los artículos 5.2 inciso l); 5.3 fracción XXXII, XLVIII; el 7.11, el 8.2 del Código
                                                Administrativo del Estado de México.
                                            </li><br>
                                            <li>
                                                Iniciativa que reforma y adiciona diversas disposiciones de la Ley de Movilidad del Estado de México,
                                                propuesta por los Diputado David Parra Sánchez y Diputado Jesús Gerardo Izquierdo Rojas.
                                            </li><br>
                                            <li>
                                                Iniciativa con Proyecto de Decreto por el que se adiciona un párrafo segundo al artículo 52 de la Ley
                                                de Movilidad del Estado de México, propuesta por la Diputada María Elida Castelán Mondragón.
                                            </li>
                                        </ol>
                                        <p>
                                            Los documentos se encuentran disponibles en su versión electrónica en el sitio de la LXI Legislatura
                                            del Estado de México: https://www.legislativoedomex.gob.mx/
                                        </p>
                                        <p>
                                            <b>TERCERA.</b> Con el fin de asegurar una adecuada participación, las Personas con discapacidad,
                                            y las organizaciones que las representan, a las que hace referencia la Base Primera de la presente
                                            Convocatoria, deberán enviar al correo electrónico:
                                            comunicacionesytransportes.lxi@gmail.com lo siguiente:
                                            <ol type="I">
                                                <li>Datos:</li>
                                                    <ul>
                                                        <li>Nombre.</li>
                                                        <li>Edad.</li>
                                                        <li>Teléfono de contacto.</li>
                                                        <li>Correo electrónico.</li>
                                                    </ul><br>
                                                <li>El formato en el cual desean desarrollar su participación:</li>
                                                    <ul>
                                                        <li>De forma presencial en el Salón Benito Juárez del Congreso del Estado de México el día 9 de abril de 2024 a las 05:00 P.M.</li>
                                                        <li>Recepción electrónica al correo: <b>comunicacionesytransportes.lxi@gmail.com</b></li>
                                                        <li>Para quienes participan a nombre de una persona, organización o coalición de organizaciones de Personas con discapacidad, documento que acredite la representación.</li>
                                                    </ul><br>
                                                <li>Tipo de discapacidad y, en su caso, medidas de accesibilidad y ayuda que faciliten su participación en este ejercicio.</li><br>
                                                <li>Documento que contenga los comentarios o propuestas respecto de las modificaciones que se plantea realizar con motivo de la expedición
                                                    de la Ley de Movilidad y Seguridad Vial del Estado de México.</li>
                                            </ol>
                                        </p>
                                        <p>
                                            <b>CUARTA.</b> La información antes mencionada, será recibida a partir de la emisión de la presente Convocatoria y hasta un día antes de la realización de la Consulta.
                                        </p>
                                        <p>
                                            <b>QUINTA.</b> El desarrollo de la consulta se realizará en el Salón Benito Juárez del Congreso del Estado de México el día 9 de abril de 2024 a las 05:00 P.M. de conformidad
                                            con lo dispuesto por la Junta de Coordinación Política del Congreso del Estado de México, y será difundida a través de https://legislativoedomex.gob.mx/consultamovilidad
                                            y los medios electrónicos que disponga el Congreso del Estado de México.
                                        </p>
                                        <p>
                                            <b>SEXTA.</b> Para efectos de transparencia y máxima publicidad, las Secretarías Técnicas de las Comisiones Unidas de Comunicaciones y Transportes y de Gobernación
                                            y Puntos Constitucionales integrarán una relatoría de lo abordado en la consulta, misma que será puesta a disposición del público en general a través del micrositio
                                            de la Consulta para la construcción de la Ley de Movilidad y Seguridad Vial del Estado de México.
                                        </p>
                                        <p>
                                            <b>SÉPTIMA.</b> Aunado a la Consulta pública y en tanto no sean dictaminadas dichas reformas, las Comisiones Unidas de Comunicaciones y Transportes y de Gobernación
                                            y Puntos Constitucionales recibirán comentarios u opiniones que cualquier persona interesada quiera aportar, a través del correo electrónico comunicacionesytransportes.lxi@gmail.com
                                        </p>
                                        <p>
                                            <b>OCTAVA.</b> Cualquier controversia relacionada con la presente Convocatoria será resuelta por las Comisiones Unidas de Comunicaciones y Transportes y de Gobernación
                                            y Puntos Constitucionales del Congreso del Estado de México.
                                        </p>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links" href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/Convocatoria en versión standar.pdf" target="_blank">
                                                                Convocatoria en versión estándar (PDF)
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links" href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/Convocatoria Consulta Ley Movilidad EdoMex.pdf" target="_blank">
                                                                Convocatoria en Lectura Fácil (PDF – Tipografía más grande)
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links" href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/CONVOCATORIA CONSULTA - TEXTO SIMPLE actualizado.txt" target="_blank">
                                                                Convocatoria en texto simple (txt)
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links" href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/convocatoria Movilidad Estado de Mexico.pdf"  target="_blank">
                                                                Convocatoria en texto en sistema pictográfico de comunicación.
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links"  href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/Aviso de privacidad - Comisión de Comunicaciones y Transportes 26-03-24.pdf" target="_blank">
                                                                Aviso de privacidad
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links"  href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/Fe de Erratas.pdf" target="_blank">
                                                                Fe de erratas
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
{{--                                            <div alt="Video con audio, lenguaje de señas y subtitulado" title="Video con audio, lenguaje de señas y subtitulado">--}}
{{--                                                <iframe  class="video" id="video" id="ensembleEmbeddedContent_vbASiLRZCEm4KUMoa_yCJQ"--}}
{{--                                                         src="https://legislativoedomex.gob.mx/storage/img/videos/Convocatoria%20en%20LSM.mp4" title="Video con audio, lenguaje de señas y subtitulado" sandbox>--}}
{{--                                                </iframe>--}}
{{--                                            </div>--}}
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links" href="https://legislativoedomex.gob.mx/storage/img/videos/Convocatoria en LSM final.mp4" target="_blank">
                                                                Convocatoria en video subtitulado con interpretación de lengua de señas.
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="embed-responsive embed-responsive-21by9">
                                            <iframe class="embed-responsive-item" src="https://legislativoedomex.gob.mx/storage/img/videos/Convocatoria en LSM final.mp4" allowfullscreen></iframe>
                                        </div>
                                        <br>
{{--                                        <div class="d-flex flex-column flex-md-row justify-content-center" alt="Video con audio, lenguaje de señas y subtitulado" title="Video con audio, lenguaje de señas y subtitulado">--}}
{{--                                            <p>--}}
{{--                                                <a href="https://legislativoedomex.gob.mx/storage/img/videos/Convocatoria%20en%20LSM.mp4" class="btn btn-outline-darker border-2 rounded-4 text-nowrap py-16 px-32 flex-grow-1 flex-md-grow-0" tabindex="0" target="_blank">--}}
{{--                                                    Convocatoria en video subtitulado con interpretación de lengua de señas.--}}
{{--                                                </a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
                                        <hr>
                                        <p style="font-size: 12px;"><a href="#_ftnref1" name="_ftn1"><sup><sup>[1]</sup></sup></a> Recomendación General núm. 7 (2018) sobre la participación de las Personas con discapacidad, incluidos los niños y las niñas
                                            en situación de discapacidad, a través de las organizaciones que las representan, en la aplicación y el seguimiento de la
                                            Convención, Organización de las Naciones Unidas, publicada el 9 de noviembre de 2018, https://www.ohchr.org/es/documents/
                                            general-comments-and-   recommendations/general-comment-no7-article-43-and-333-participation<br>
                                            <a href="#_ftnref2" name="_ftn2"><sup><sup>[2]</sup></sup></a>  Convención sobre los Derechos de Personas en situación de discapacidad, Organización de las Naciones	Unidas,	EUA,
                                            en	vigor	desde	el	3	de	mayo	de	2008, https://www.un.org/esa/socdev/enable/documents/tccconvs.pdf
                                        </p>
                                        <hr>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="informacion" role="tabpanel" aria-labelledby="informacion-tab">
                                <div class="mb-24">
                                    <div class="card-iniciativa position-relative bg-lighter rounded-4 p-16 pt-md-40 p-md-32 mb-24">
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                PROTOCOLO DE CONSULTA PARA LA CONSTRUCCIÓN DE LA NUEVA LEY DE MOVILIDAD Y SEGURIDAD VIAL DEL ESTADO DE MÉXICO Y SUS MUNICIPIOS
                                            </b>
                                        </h2>
                                        <br>
                                        <table class="table table-bordered" align="center" border="1px" style="margin: 0px auto; ">
                                            <thead>
                                            <tr>
                                                <th scope="col">
                                                    PROYECTO<br>
                                                    GRUPO PARLAMENTARIO morena
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <b>TITULO PRIMERO<br>
                                                        DE LAS DISPOSICIONES GENERALES</b>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td style="text-align: center">
                                                <b>CAPITULO I<br> NATURALEZA Y OBJETO</b>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 2. Glosario.</b><br>
                                                    Para la aplicación, interpretación y efectos de esta Ley, se entenderá por:

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>XXXIII. Discriminación por motivos de discapacidad:</b> Se entenderá cualquier distinción, exclusión
                                                    o restricción por motivos de discapacidad que tenga el propósito o el efecto de obstaculizar,
                                                    menoscabar o dejar sin efecto el reconocimiento, goce o ejercicio, en igualdad de condiciones,
                                                    de todos los derechos humanos y libertades fundamentales en los ámbitos político, económico,
                                                    social, cultural, civil o de otro tipo. Incluye todas las formas de discriminación, entre ellas,
                                                    la denegación de ajustes razonables.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>LI. Grupos vulnerables:</b> Población que enfrenta barreras para ejercer su derecho a la movilidad con seguridad
                                                    vial como resultado de la desigualdad, como las personas con menores ingresos, indígenas, con discapacidad,
                                                    en estado de gestación, adultas mayores, comunidad LGBTTTI, así como mujeres, niñas, niños y adolescentes,
                                                    y demás personas que por su condición particular enfrenten algún tipo de exclusión.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>LXXIV. Persona peatona:</b> Persona que transita por la vía a pie, o que por condición de discapacidad o movilidad
                                                    limitada utiliza ayudas técnicas para desplazarse; incluye menores de doce años a bordo de un vehículo no motorizado;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>LXXV. Perro de asistencia:</b> Son aquellos que han sido certificados para el acompañamiento, conducción y auxilio de personas con discapacidad.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>LXXVIII. Personas con movilidad limitada:</b> Toda persona cuya movilidad se ha reducido por motivos de edad, embarazo y alguna otra situación que,
                                                    sin ser una discapacidad, requiere una atención adecuada y la adaptación a sus necesidades particulares en el servicio.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>XCVII. Siniestro de tránsito:</b> Cualquier suceso, hecho, accidente vial o evento en vía pública derivado del tránsito vehicular y de personas,
                                                    en el que interviene por lo menos un vehículo y en el cual se causa la muerte, lesiones, incluidas en las que se adquiere alguna discapacidad,
                                                    o daños materiales.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>CXV. Vehículo no motorizado:</b> Vehículo de tracción humana como bicicleta, monociclo, triciclo, cuatriciclo; vehículos recreativos como patines,
                                                    patinetas o monopatines; incluye aquellos asistidos por motor de baja potencia no susceptible de alcanzar velocidades mayores a 25 kilómetros
                                                    por hora y los que son utilizados por personas con discapacidad.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>CXXII. Vía peatonal:</b> Aquella destinada a la circulación exclusiva o prioritaria de personas con discapacidad y peatones, en la que el acceso
                                                    a vehículos está restringido según las reglas específicas.
                                                </td>
                                            </tr>
                                            <td style="text-align: center">
                                                <b>CAPITULO II<br> DE LA MOVILIDAD</b>
                                            </td>
                                            <tr>
                                                <td>
                                                    <b>Artículo 4. Principios en materia de movilidad.</b><br>
                                                    Las autoridades en materia de movilidad, en el ámbito de su competencia, deberán observar los siguientes principios rectores:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>XXI. Uso prioritario de la vía o del servicio. </b>
                                                    Concientizar a personas usuarias de la vía y transporte público sobre la necesidad que tienen las personas en situación de discapacidad,
                                                    las personas con movilidad limitada y quien los acompaña, de usar en determinadas circunstancias, las vías de manera preferencial con
                                                    el fin de garantizar su seguridad.
                                                </td>
                                            </tr>
                                            <td style="text-align: center">
                                                <b>CAPITULO III<br> DE LOS INSTRUMENTOS DE MOVILIDAD Y SEGURIDAD VIAL</b>
                                            </td>
                                            <tr>
                                                <td>
                                                    <b>Artículo 5. De los instrumentos para la infraestructura de la movilidad y seguridad vial.</b><br>
                                                    La Secretaría y los municipios establecerán en sus documentos normativos, que las obras de infraestructura vial urbana y carretera
                                                    sean diseñadas y ejecutadas bajo los principios, jerarquía de la movilidad y criterios establecidos en la presente Ley, priorizando
                                                    aquellas que atiendan a personas peatonas, vehículos no motorizados y transporte público, de conformidad con las necesidades de cada territorio.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Los estándares de diseño vial y dispositivos de control de tránsito deberán ser definidos por la autoridad estatal competente,
                                                    en concordancia con las Normas Oficiales Mexicanas expedidas para tal efecto.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    En materia de prevención de siniestros de tránsito, los distintos órdenes de gobierno deberán establecer estrategias, planes
                                                    y programas de infraestructura vial que, reconociendo la posibilidad del error humano y la interseccionalidad de las personas
                                                    usuarias de la vía, se encaminen a evitar muertes, lesiones, incluidas en las que se adquiere alguna discapacidad, a través
                                                    del mejoramiento de la infraestructura vial.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>TITULO SEGUNDO<br> DE LA LAS AUTORIDADES EN MATERIA DE MOVILIDAD</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO I<br> DE LAS DISPOSICIONES GENERALES</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 21. Atribuciones de la Secretaría de Seguridad.</b><br>
                                                    Corresponde a la Secretaría de Seguridad el ejercicio de las siguientes atribuciones:

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>IV.</b> Garantizar en el ámbito de sus atribuciones, que la infraestructura ciclista, banquetas, cruces y rampas peatonales,
                                                    y accesos destinados a las personas en situación de discapacidad, permanezcan libres de obstáculos y elementos que impidan,
                                                    dificulten u obstruyan el tránsito vehicular y peatonal, excepto en aquellos casos debidamente autorizados, en cumplimiento
                                                    con las Normas Oficiales Mexicanas aplicables;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO II<br> DE LAS ATRIBUCIONES Y COMPETENCIA DE LOS MUNICIPIOS</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 24. Atribuciones municipales en materia de movilidad y seguridad vial.</b><br>
                                                    Los municipios a través de sus Ayuntamientos tendrán las atribuciones siguientes en materia de movilidad y seguridad vial:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>XXIV.</b> Promover en el ámbito de su competencia las acciones para el uso racional del espacio vial, teniendo como prioridad
                                                    la jerarquía de movilidad e impulsando la accesibilidad e inclusión de personas en situación de discapacidad y personas
                                                    con movilidad limitada, para un desplazamiento seguro y efectivo en las vías a través de infraestructura adecuada;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>TITULO TERCERO<br> DEL SISTEMA ESTATAL DE MOVILIDAD, SEGURIDAD VIAL Y TRANSPORTE</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO III <br> DEL DISEÑO VIAL</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 32. Diseño vial seguro.</b><br>
                                                    Las obras de infraestructura vial urbana y carretera deben ser diseñadas y ejecutadas bajo los principios, jerarquía
                                                    de la movilidad y criterios establecidos en la presente Ley, en concordancia con las Normas Oficiales Mexicanas,
                                                    priorizando aquéllas que atiendan a personas peatonas, personas de los grupos vulnerables, vehículos no motorizados
                                                    y transporte público. Las vías deben planearse, diseñarse y operarse mediante un enfoque sistémico y de sistemas
                                                    seguros, reconociendo la posibilidad del error humano y la interseccionalidad de las personas usuarias de la vía,
                                                    a fin de evitar muertes, lesiones graves, incluidas en las que se adquiere alguna discapacidad, a través del mejoramiento
                                                    de la infraestructura vial.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 33. Criterios de diseño de vías urbanas y carreteras de jurisdicción estatal.</b><br>
                                                    El diseño y la operación vial de carreteras estatales y calles nuevas, así como de vías existentes deberá cumplir con los
                                                    criterios técnicos previstos en los manuales de diseño vial y dispositivos de control del tránsito, en concordancia con
                                                    las Normas Oficiales Mexicanas, que al efecto se expidan, con los principios establecidos en esta Ley y con la garantía
                                                    efectiva del derecho a la movilidad, específicamente los siguientes:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>VII. Vías autoexplicables:</b> Las vías integrarán sus elementos de manera coherente y entendible como señales, marcas, dispositivos,
                                                    geometría, superficies, iluminación y gestión de la velocidad, para evitar siniestros de tránsito y generar accesibilidad para
                                                    las personas en situación de discapacidad o movilidad limitada, que las expectativas de las personas usuarias, anticipen
                                                    adecuadamente las situaciones y generen conductas seguras.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 34. Principios de diseño en vías urbanas.</b><br>
                                                    En el diseño, construcción y operación de las vías, tanto en sus elementos inherentes como en los incorporados,
                                                    se deberá garantizar en todo momento el derecho a la movilidad de todas las personas, bajo los siguientes criterios:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>b. Diseño universal:</b> El proyecto debe garantizar que las circulaciones, materiales, geometrías, señalización y elementos
                                                    complementarios sean diseñados para su usabilidad para todas las personas, sin exclusión por motivo de género, identidad, edad,
                                                    situación de discapacidad, movilidad limitada, limitación cognitiva, sin necesidad de adaptación ni diseño especializado y
                                                    equiparando oportunidades.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>c. Prioridad grupos en situación de vulnerabilidad:</b> El proyecto debe garantizar que los factores como la velocidad,
                                                    circulación cercana a vehículos motorizados y ausencia de infraestructura de calidad, no pongan en riesgo a personas
                                                    peatonas y ciclistas, en particular a la niñez, personas adultas mayores, personas en situación de discapacidad o
                                                    con movilidad limitada.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 38. Disposiciones jurídicas de diseño vial y dispositivos de control del tránsito.</b>
                                                    La Secretaría o la autoridad competente deberá emitir los siguientes instrumentos para establecer los estándares de diseño
                                                    vial seguro y dispositivos de control del tránsito, que serán obligatorios en las políticas, programas, proyectos y obras
                                                    relativas a la infraestructura y operación vial del Estado y los municipios, y los cuales estarán en concordancia con los
                                                    manuales y Normas Oficiales Mexicanas expedidas para tal efecto:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>a.</b> Señalización horizontal y vertical, que incluya, sin limitarse, rayas y marcas en pavimento, semáforos, dispositivos de
                                                    apoyo para personas con discapacidad, reductores de velocidad y guías viales;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 44. Vías recreativas.</b><br>
                                                    Las autoridades estatales y municipales deberán garantizar espacios públicos suficientes, seguros y de calidad para el
                                                    desplazamiento de las personas por medio de la actividad física e incluir la infraestructura peatonal y ciclista en la}
                                                    normatividad sobre vías y espacios públicos.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Con la finalidad de dar cumplimiento a lo establecido en el presente ordenamiento, la Secretaría de Educación, la Secretaría
                                                    de Cultura y Turismo, el Sistema para el Desarrollo Integral de la Familia del Estado de México, el Instituto Mexiquense de
                                                    la Juventud, el Instituto Mexiquense para la Discapacidad, se podrán coordinar con la Secretaría y la Secretaría de Desarrollo
                                                    Urbano y Obras, para la implementación de los programas de vías recreativas.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO IV<br> DE LAS PERSONAS USUARIAS DEL TRANSPORTE PÚBLICO, CONDUCTORAS Y OPERADORAS DE LA MOVILIDAD MOTORIZADA</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 46. Derechos de las personas usuarias.</b><br>
                                                    Para los efectos de esta Ley y los ordenamientos que de ella emanan, las personas usuarias del servicio de transporte público
                                                    tendrán los siguientes derechos:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>VIII.</b> Las tarifas autorizadas, incluyendo las tarifas preferenciales para las personas estudiantes, personas adultas mayores
                                                    y personas con discapacidad;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 48. Obligaciones de las personas usuarias.</b><br>
                                                    Las personas usuarias del transporte público tendrán las siguientes obligaciones:

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>V.</b> En los vehículos de servicio público de personas pasajeras al llevar animales de compañía deberán utilizar
                                                    transportadoras, con excepción de los perros guía o de asistencia para personas con discapacidad o con prescripción
                                                    médica por enfermedades, quedan prohibidos los objetos que puedan atentar contra la integridad física de las personas
                                                    usuarias. El equipaje deberá transportarse en la bodega, baúl o parrilla; y
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 50. Obligaciones.</b><br>
                                                    Las personas operadoras del sistema de transporte público colectivo estarán obligados a:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>I. a XII. …</b><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    El Ejecutivo estatal, mediante los estudios técnicos, determinará en la norma técnica correspondiente, la incorporación
                                                    al servicio público de transporte de vehículos que cuenten con aditamentos especiales, tales como rampas y elevadores
                                                    o mecanismos especiales que permitan la entrada y salida a personas con discapacidad, en sillas de ruedas, muletas,
                                                    prótesis o cualquier elemento necesario para facilitar su desplazamiento, al igual que a las personas que ejercen la
                                                    movilidad de cuidado, así como el número, ubicación y características que deberán reunir los espacios para personas
                                                    con discapacidad en las unidades que se destinen a la prestación de este servicio público.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>TITULO CUARTO<br>
                                                        DEL PROGRAMA ESTATAL DE MOVILIDAD, SEGURIDAD VIAL Y TRANSPORTE</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO II<br>DE LAS CONCESIONES</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 62. Disposiciones para el otorgamiento de concesiones y proyectos de asociación con particulares.</b><br>
                                                        Las autoridades en materia de movilidad bajo el principio de simplificación administrativa, en el ámbito de su competencia,
                                                        podrán otorgar concesiones e implementar proyectos de asociación con particulares constituidos en sociedades anónimas
                                                        de capital variable, para el cumplimiento de las atribuciones que les corresponden en materia de movilidad, de conformidad
                                                        con lo siguiente:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>I. a III. …</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    No se podrá otorgar o renovar concesión alguna si el concesionario no acredita la capacitación de las y los operadores en temas
                                                    relacionados con la prevención de las violencias contra las niñas, niños, adolescentes y mujeres, personas en situación de
                                                    discapacidad y de movilidad limitada, así como en materia de desaparición de personas que para tal efecto se determinen.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO IV<br>DE LOS ELEMENTOS DEL SERVICIO DE TRANSPORTE
                                                    </b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 72. Principios que regirán la prestación del Servicio Público de Transporte.</b><br>
                                                    La prestación del servicio público de transporte, ya sea de manera directa por las autoridades en materia de movilidad,
                                                    dependencias y organismos auxiliares o, a través de particulares constituidos en sociedades anónimas de capital variable,
                                                    que cuenten con una concesión para dichos efectos en los términos de esta Ley, se regirá por los principios de la movilidad
                                                    de esta Ley y por los que se establecen a continuación:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>III. Igualdad.</b> El Servicio deberá ser prestado a todas las personas para asegurar su accesibilidad igualitaria
                                                    e incluyente, que cumplan con las condiciones para el uso del servicio de que se trate, sin hacer distinción alguna
                                                    entre los usuarios de dicho servicio, ya sea por origen étnico, género, edad, discapacidad, la condición social, las
                                                    condiciones de salud, la religión, las opiniones, preferencia sexual, estado civil o cualquier otra que atente contra
                                                    la dignidad humana y tenga por objeto anular o menoscabar el derecho de cualquier persona a la movilidad.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>TITULO QUINTO <br>
                                                        DE LAS DISPOSICIONES COMPLEMENTARIAS</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>CAPITULO I<br>
                                                        DE LOS ORGANISMOS DE PARTICIPACIÓN SOCIAL Y CONSULTA
                                                    </b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 55. De la participación social organizada.</b><br>
                                                    El Ejecutivo del Estado y los municipios promoverán la creación de observatorios con la participación de la sociedad,
                                                    pueblos y comunidades indígenas y afromexicanas, personas con discapacidad, las organizaciones que les representan,
                                                    instituciones académicas y de investigación, colegios de profesionistas, organizaciones civiles, para el estudio,
                                                    investigación y propuestas; evaluación de las políticas públicas, en materia de movilidad, seguridad vial y transporte.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <b>SECCIÓN II<br>
                                                        DEL OBSERVATORIO
                                                    </b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Artículo 76. Observatorio Ciudadano de Movilidad, Seguridad Vial y Transporte.</b><br>
                                                    El Observatorio Ciudadano Estatal de Movilidad, Seguridad Vial y Transporte es un organismo auxiliar de participación social y de consulta,
                                                    con funciones deliberativas y propositivas, con el objetivo de proponer políticas públicas, programas y acciones en materia de movilidad,
                                                    seguridad vial y transporte; el estudio, investigación y propuestas; capacitación a la comunidad; difusión de información y conocimientos
                                                    sobre la problemática de la movilidad, la seguridad vial y el transporte, la accesibilidad, la eficiencia, la sostenibilidad, la calidad
                                                    y la inclusión e igualdad y sus implicaciones en el ordenamiento territorial y en general sobre la aplicación de la presente Ley.<br>
                                                    La Secretaría deberá garantizar una diversa representación de sectores sociales en la integración del Observatorio, que deberá considerar
                                                    pueblos y comunidades indígenas y afromexicanas, personas en situación de discapacidad y las organizaciones que les representan, instituciones
                                                    académicas y de investigación, colegios de profesionistas con incidencia directa en la materia de esta Ley, organismos empresariales del
                                                    sector ligado a la movilidad, la seguridad vial y al transporte de bienes y mercancías, organizaciones de la sociedad civil organizada.

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <h3 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0"><b>Información de consulta</b></h3>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links"  href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/Documentos de Consulta - Ley de movilidad.pdf" target="_blank">
                                                                Documento de consulta - Lectura Fácil
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="protocolo" role="tabpanel" aria-labelledby="protocolo-tab">
                                <div class="mb-24">
                                    <div class="card-iniciativa position-relative bg-lighter rounded-4 p-16 pt-md-40 p-md-32 mb-24">
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                CONSULTA PARA LA CONSTRUCCIÓN DE LA LEY DE MOVILIDAD Y SEGURIDAD VIAL DEL ESTADO DE MÉXICO
                                            </b>
                                        </h2>
                                        <p>
                                            Consulta a personas en situación de discapacidad (PeSD.)
                                        </p>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0"><b>Etapa Preparativa</b></h2>
                                        <p>
                                            Se contextualizará la situación de las PeSD. en relación con la Ley de Movilidad y Seguridad Vial del Estado de México
                                            tomando en cuenta información cuantitativa y cualitativa que permita identificar el número total de población estatal
                                            de las personas con discapacidad.
                                        </p>
                                        <p>
                                            De ser posible, se identificará a el contexto social y económico que permita detectar sus necesidades y requerimientos
                                            de igual forma deberá integrarse un análisis normativo y jurisdiccional en materia de los derechos humanos de este grupo vulnerable.
                                        </p>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0"><b>Etapa de acuerdos previos</b></h2>
                                        <p>
                                            Con la finalidad de garantizar la máxima participación de las colectividades sujetas a ser consultadas, se contempla la
                                            construcción de una Mesa de Trabajo Interinstitucional presidida por un representante de las Comisiones Unidas de
                                            Comunicaciones y Transportes y de Gobernación y Puntos Constitucionales invitando a participar al titular del
                                            Departamento de Atención a Personas con Discapacidad y Adultos Mayores de la Comisión de Derechos Humanos del Estado
                                            de México (CODHEM) o quien este designe, el titular de la Subdirección de Atención a la Discapacidad de DIFEM o quien
                                            este designe, el titular del Instituto Mexiquense para la
                                        </p>
                                        <p>
                                            Protección e Integración al Desarrollo de las Personas con Discapacidad o quien este designe y representantes de los
                                            colectivos plenamente identificados y constituidos que trabaje en pro de la defensa de los derechos de las PeSD.
                                        </p>
                                        <p>
                                            Dicha Mesa de Trabajo Interinstitucional tiene la finalidad de guiar, apoyar y colaborar con las consultas y garantizar que los
                                            términos de la convocatoria se cumplan en su totalidad. De igual forma tanto la convocatoria como toda la información que se
                                            maneje en las diferentes etapas de la consulta sea publicada y traducida a los siguientes formatos accesibles<a href="#_ftn3" name="_ftnref3"><sup>[3]</sup></a>:
                                            <ol type="A">
                                                <li>Video subtitulado con interpretación de lengua de señas.</li>
                                                <li>Texto del proyecto en formato de lectura fácil. </li>
                                                <li>Texto impreso en sistema braille. </li>
                                                <li>Texto en sistema pictográfico de comunicación.</li>
                                                <li>Además, se debe de contemplar la creación de un sitio web accesible, dónde el órgano legislativo dará publicidad a la información. </li>
                                            </ol>
                                        </p>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                Etapa informativa
                                            </b>
                                        </h2>
                                        <p>
                                            Durante todo el proceso de la consulta se garantizará adecuadamente el derecho a la información de las personas con discapacidad.
                                        </p>
                                        <p>
                                            De manera paralela se distribuirá la información elaborada en la etapa preparatoria a las colectividades que realizan trabajos en pro de
                                            las PeSD. debidamente identificadas por la Mesa de Trabajo y todas aquellas que soliciten formalmente la información en los medios indicados
                                            por la convocatoria.
                                        </p>
                                        <p>
                                            Las acciones antes señaladas, se realizarán desde la emisión de la Convocatoria y hasta un día antes de la realización de la Consulta.
                                            Durante la realización de la de Consulta, con la finalidad de propiciar la reflexión y debate, la Autoridad Responsable expondrá las
                                            características y alcances de todos los temas que pretende sean contenidos en las medidas a implementar; quienes participen en la
                                            presente Consulta, podrán hacer las aportaciones que estimen convenientes.
                                        </p>
                                        <p>
                                            Aunado a lo anterior, las personas sujetas a ser consultadas podrán solicitar información específica respecto de los temas
                                            que contendrán las acciones afirmativas durante todo el proceso de consulta.
                                        </p>
                                        <p>
                                            Las colectividades que trabajan en pro de la defensa de los derechos de las PeSD. plenamente constituidas e identificadas<a href="#_ftn4" name="_ftnref4"><sup>[4]</sup></a>  por las
                                            Comisiones Unidas de Comunicaciones y Transportes y de Gobernación y Puntos Constitucionales son las siguientes:
                                        </p>
                                        <div>
                                            <table  class="table table-bordered" align="center" border="1px" style="margin: 0px auto; ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NOMBRE DE LA IAP</th>
                                                        <th scope="col">PÁGINA WEB</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Instituto Mexicano Contra la Corrupción<br> y Asistencia a <br>Grupos Vulnerables</p>
                                                        </td>
                                                        <td>http://imexc.org/</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Vemos con el Corazón</p>
                                                        </td>
                                                        <td>www.vemosconelcorazon.org.mx</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Ayuda para el Desarrollo<br> Humano Integral</p>
                                                        </td>
                                                        <td>http://www.adhiap.org</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Fundación Vamos a Dar</p>
                                                        </td>
                                                        <td>http://www.vamosadar.org.mx/</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Sanando Alas</p>
                                                        </td>
                                                        <td>www.sanandoalas.org </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Asociación Mexicana de<BR> Esclerosis Multiple</p>
                                                        </td>
                                                        <td>www.amemiap.org.mx</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Fundación Inclúyeme</p>
                                                        </td>
                                                        <td>https://www.incluyeme.org/</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Fundación Autismax</p>
                                                        </td>
                                                        <td>http://autismax.org.mx/</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Asociación Banco de Ojos<br> Lions Internacional</p>
                                                        </td>
                                                        <td>www.ojoslions.org.mx</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                Etapa deliberativa y de consulta
                                            </b>
                                        </h2>
                                        <p>
                                            Para el desahogo de esta etapa, se realizará <b>un foro de Consulta en las
                                                instalaciones del Congreso del Estado de México</b>, mismo que deberá garantizar
                                            condiciones de accesibilidad para las y los asistentes.
                                        </p>
                                        <p>
                                            En la primera etapa del foro de Consulta, las y los asistentes reflexionarán sobre la
                                            información brindada por los integrantes de las comisiones Legislativas encargadas de
                                            dictaminar la Ley para cotejar sus propuestas, reflexiones y observaciones.
                                            Se expondrán ponencias de las PeSD., representantes y líderes de colectividades debidamente identificadas.
                                        </p>
                                        <p>
                                            Se elaborará un acta que contenga las propuestas, acuerdos y resultados derivados de la consulta, se traslade.
                                            a los medios adecuados para hacer del conocimiento de las personas con discapacidad participantes, para su total comprensión.
                                        </p>
                                        <p>
                                            La participación en las mesas de trabajo de la Consulta se podrá realizar a través de las siguientes modalidades:
                                            <ul>
                                                <li>
                                                    De forma presencial en las instalaciones del Congreso del Estado de México.
                                                </li>
                                                <li>
                                                    Recepción electrónica al correo:	 comunicacionesytransportes.lxi@gmail.com
                                                </li>
                                            </ul>
                                        </p>
                                        <p>
                                            Los participantes que asistan a la consulta de manera presencial deberán presentar un medio de identificación
                                            con validez en el Estado.
                                        </p>
                                        <p>
                                            En caso de no contar con alguna identificación se integrará en el formato de registro la información y causas
                                            por las cuales no cuenta con identificación, reconociendo en todo momento su derecho a participar.
                                        </p>
                                        <p>
                                            En el caso particular de entrega de documentación en las oficinas referidas para ello deberán ser presentadas
                                            a la oficialía de partes quien recibirá y dará copia de acuse de recibido y que a su vez remitirá a la brevedad
                                            a los medios designados por la Mesa de Trabajo Interinstitucional.
                                        </p>
                                        <p>
                                            Para la recepción electrónica, la Mesa de Trabajo Interinstitucional habilitará una dirección de correo al cual
                                            deberán ser remitidas las propuestas una vez emitida la convocatoria y los temas de las consultas para su descarga,
                                            la fecha límite para su remisión será el día en que se lleve a cabo la consulta presencial.
                                        </p>
                                        <p>
                                            Dicha información deberá ser acompañada con archivos electrónicos de la identificación de la persona y el formato
                                            bajo protesta de decir verdad de ser una persona con discapacidad, mismo que podrá ser encontrado en la convocatoria
                                            dentro del portal micrositio provisto por la LXI Legislatura para efectos de la presente Consulta.
                                        </p>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                Etapa de valoración de las opiniones y sugerencias
                                            </b>
                                        </h2>
                                        <p>
                                            La Mesa de Trabajo Interinstitucional atenderá las propuestas, sugerencias, observaciones y contenidos normativos,
                                            en su caso, explicar las razones por las que no sean consideradas, cumpliendo con el deber de acomodo y razonabilidad.
                                        </p>
                                        <p>
                                            De igual forma, se deberán de considerar realizar los ajustes razonables dentro de la elaboración del dictamen de las
                                            Comisiones Legislativas, así como las modificaciones y adaptaciones necesarias, técnicamente viables de realizarse
                                            conforme al principio de progresividad, que se requieran para garantizar el acceso a la movilidad de las personas
                                            con discapacidad en condiciones de igualdad y accesibilidad.
                                        </p>
                                        <h2 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                Etapa de cierre
                                            </b>
                                        </h2>
                                        <p>
                                            Con la finalidad de dar seguimiento a los acuerdos la Mesa de Trabajo Interinstitucional, procesará los resultados obtenidos
                                            en la Consulta, elaborará síntesis y conformará un documento con los resultados de la consulta asegurando las condiciones
                                            de accesibilidad que sean necesarias y las entregará a las Comisiones Unidas de Comunicaciones y Transportes y de
                                            Gobernación y Puntos Constitucionales.
                                        </p><br>
                                        <h3 style="text-align: center; " alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                LUGAR PROPUESTO PARA EL FORO DE CONSULTA A PeSD. PARA LA CONSTRUCCIÓN DE LA LEY DE MOVILIDAD Y SEGURIDAD
                                                VIAL DEL ESTADO DE MÉXICO
                                            </b>
                                        </h3>
                                        <br><br>
                                        <h4  alt="Inicio" title="Inicio de lectura" tabindex="0">
                                            <b>
                                                Salón Benito Juárez<br>
                                                Congreso del Estado de México<br>
                                                Fecha: Martes 9 de abril de 2024, 05:00 pm.
                                            </b>
                                        </h4>
                                        <div class="d-flex flex-wrap fs-13 fw-semibold">
                                            <div class="icon-text-card d-flex align-items-center me-16 mb-16 morado"  tabindex="0">
                                                <div class="icon" title="Icono">
                                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAUVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////9jlXTzAAAAGnRSTlMA03lKFe07u1po9QyY2i2mw+JTBYjLsRxzucSdp/MAAAM4SURBVFjDzVfHoqsgEBU7gmCNif//oY+hN425qzcbUeAw9TAWxY1UFA3DyJe1+JOw6dSC2r/sX4bTCf59fyv3DwgpnOXX/WQWuxpMimLt5bD+EaAUm+ZDjWskXujXLWtPXxyOlAJ7KutOUEGHgmD+on0mLu0sbZ3VrkMMdzfJxauKRNWoZW3eZ6c5txWDzc1i8drL0JhVQ4SwzjZi0l2VGJRuuteRrBu7bA6tgBXNUleA89YaeG57aw3e0sh6aYxGVqgONWx8wVHiObozICeZeH60L5YkLC/xRUbaOG/y0w8MmmGwi0Gh8V8BANfeg4B9jE2DjmPbaMOkBkwj8gAAq9AwZJ0nK4m3hLRg3jkSk16IqZCHPiDOvUNtveKJitrhCmwmUenbmd6q5Asvos9VlEi9OV/tZ3AU8gtaZwUegnOcgPHT/il10XWwn9RYWDbgmjsjirr87OAflCrgxR3iPDCF24g8hR27m17HRAUUftmNzgpApXAfnodiF3oKQD42xAOQzhuLUIUqsuDtXjfrNAOwIucFvzjiatMC+EcAIHfQTH1nAQ5noQWoTTk8Aagcm1gAmdrHQwDs3hwADdx2D7C5tQ4AJ2cYgLrrOvDx2BmBWtvVEBJXjcIl4GYknrV22Z/l+C8AosA9ky1K5cNQ4VPpgqwQ0thwPZNk/SdGNFzJGMl8TjXeMiwn8ktS89SnzVPisz68C3WGGV9/6kz3EMKy5KZQbYXpsiIEri8Yj2KGgHHMbXeOlELWRvcYEMYQ9RjAgiTh+bfhklBhErYftlrbmGZLx18BhbaZnglHzSCsQVpLSYjsZnEOtPTDUkYxStT1zdqmaSLKz7TUQlWMiJjasg7zHatbjS6uu861FZmQeaHVANMNQCZpvOTSAPxM73cDkEvbJL2hOOiihaZz1bcCA7zJb9LaGzLIlbjsPBd32ft95QV5RJRQ2n5WdsHv7/QVWUZkMfK+l+5E6x0Z5CmBucbtbNgtGVxQArMN+MzuyeCCElZC1X8TJd/I4IIShCMqjCtyUTWJ5Gos9zt3+QOFn/0fXi9rH/2b3SgKxjXdV2lyZOCas0cyXijHnwLwm7/VR+In7D/bq4swU8W6WwAAAABJRU5ErkJggg==">
                                                </div>
                                                <div>
                                                    <p><strong><a class="links"  href="https://legislativoedomex.gob.mx/storage/documentos/convocatorias/Etapas Consulta Ley Movilidad EdoMex.pdf" target="_blank">
                                                               Protocolo - Lectura Fácil
                                                            </a></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <p style="font-size: 12px;"><a href="#_ftnref3" name="_ftn3"><sup><sup>[3]</sup></sup></a>
                                            Además de los formatos mencionados, en el párrafo 84 se señala que “deben de ser considerados todos
                                            los medios, modos y formatos de comunicación accesible que elijan las personas con discapacidad”.
                                            <br>
                                            <a href="#_ftnref4" name="_ftn4"><sup><sup>[4]</sup></sup></a>
                                            De manera enunciativa y no limitativa.
                                        </p>
                                        <hr>
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

@include("pages.layouts.footer")
@yield("scripts")
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
