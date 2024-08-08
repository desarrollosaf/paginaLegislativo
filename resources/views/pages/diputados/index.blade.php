@extends("pages.layouts.app")
@section("content")
    <div class="container-xl">
        <div class="py-24 py-md-32">
            <h1 class="fw-bold">Diputadas y Diputados</h1>
            <div class="row gy-16 gy-lg-0 gx-24">
                <div class="col-12 col-lg-3">
                    <div class="d-flex align-items-center">
                        <input name="crit" id="crit"
                               class="form-control search-control bg-lighter border-0 rounded-4 flex-grow-1 h-56 px-24 w-100 ps-56"
                               placeholder="Buscar"/>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="dropdown">
                        <button
                            class="btn btn-lighter dropdown-toggle rounded-4 d-flex align-items-center justify-content-between h-56 px-24 w-lg-240"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Ordenar por <span id="text-order"></span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="diputado-order order-list" data-orden="1" data-text="Distrito">
                                <a href="#" class="dropdown-item">Distrito</a>
                            </li>
                            <li class="comisiones-order order-list" data-orden="2"
                                data-text="Comisiones">
                                <a href="#" class="dropdown-item">Comisiones</a>
                            </li>
                            <li class="diputado-order order-list" data-orden="3"
                                data-text="Grupos Parlamentarios">
                                <a href="#" class="dropdown-item">Grupos Parlamentarios</a>
                            </li>
                            <li class="diputado-order order-list" data-orden="4" data-text="Nombre">
                                <a href="#" class="dropdown-item">Nombre</a>
                            </li>
                            <li class="diputado-order order-list order-apellido" data-orden="5"
                                data-text="Apellido">
                                <a href="#" class="dropdown-item">Apellido</a>
                            </li>
                            <li class="diputado-order order-list" data-orden="6" data-text="Género">
                                <a href="#" class="dropdown-item">Género</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex flex-column flex-lg-row justify-content-end">
                        <button type="button"
                                class="btn btn-lighter rounded-4 d-flex align-items-center justify-content-between h-56 px-24 mb-16 mb-lg-0 order-lg-last w-240"
                                data-bs-toggle="modal" data-bs-target="#modalFilters" id="open-modal">
                            <span>Mostrar filtros(<span id="contador-form-filter">0</span>)</span> <i
                                class="bi bi-chevron-down fs-16"></i></button>
                        <button type="button" class="btn btn-link text-secondary h-56 me-lg-20 clear-form">
                            Borrar todos los
                            filtros
                        </button>
                    </div>
                </div>
            </div>
            <div class="text-secondary my-24">
                <hr>
            </div>
            <div id="list-diputados">
            </div>
            <div class="px-48 py-24"><a id="backToTop"
                                        class="btn btn-light d-flex align-items-center justify-content-center d-md-none rounded-4 py-16">
                    <i class="bi bi-arrow-up-short fs-24 me-8 lh-1"></i> <span>Regresa a inicio</span></a>
            </div>
        </div>
    </div>

    {{--       modal para las busquedas de los diputados --}}

    <div class="modal fade" id="modalFilters" data-bs-keyboard="true" tabindex="-1"
         aria-labelledby="modalFiltersLabel"
         aria-hidden="true">
        <div class="d-lg-flex align-items-lg-center justify-content-lg-between h-100 w-100 pe-none">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form id="form-filters"></form>
                    <div class="row g-0">
                        <div class="col-12 col-lg-3 p-16 border-end">
                            <nav class="nav modal-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link rounded-4 active" id="general-tab" data-bs-toggle="tab"
                                   data-bs-target="#general"
                                   type="button" role="tab"
                                   aria-controls="general"
                                   aria-selected="true">
                                        <span class="d-flex flex-column">
                                            <span class="fs-16 fw-bold">General</span>
                                            <span class="fs-13 fw-bold text-secondary" id="contador-general-filter">
                                            </span>
                                        </span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                @foreach($tipoComision as $key => $item)
                                    <a class="nav-link rounded-4" id="{{$key}}-tab" data-bs-toggle="tab"
                                       data-bs-target="#tab-{{$key}}" type="button" role="tab"
                                       aria-controls="tab-{{$key}}"
                                       aria-selected="false">
                                        <span class="d-flex flex-column">
                                            <span class="fs-16 fw-bold">
                                                {{$item->valor}}
                                            </span>
                                            <span class="fs-13 fw-bold text-secondary" id="contador-{{$key}}-filter">
                                            </span>
                                        </span>
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                @endforeach
                            </nav>
                        </div>
                        <div class="col-12 col-lg-9 p-32 pb-20">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane show active" id="general" role="tabpanel"
                                     aria-labelledby="general-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div><h4 class="fs-18 mb-0">Grupo parlamentario</h4>
                                                <div class="text-secondary">
                                                    <hr class="my-8">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end"><a
                                                        href="#"
                                                        data-check="true"
                                                        data-group-name="TrD0H"
                                                        class="fs-12 text-secondary text-decoration-none checkbox-trigger me-12"
                                                        id="checked-partido">Seleccionar
                                                        Todo</a> <a href="#" data-check="false"
                                                                    data-group-name="TrD0H"
                                                                    class="fs-12 text-secondary text-decoration-none checkbox-trigger"
                                                                    id="unchecked-partido">Quitar
                                                        Todos</a>
                                                </div>
                                                <fieldset class="m-0 mt-24 p-0">
                                                    @foreach($partidos as $item)
                                                        <div class="form-check mb-12">
                                                            <input
                                                                class="form-check-input form-filter general-filter check-partido"
                                                                name="partido[]"
                                                                type="checkbox"
                                                                value="{{$item->id}}" id="{{$item->id}}"
                                                                form="form-filters">
                                                            <label class="form-check-label" for="{{$item->id}}">
                                                                {{$item->siglas}} - {{$item->nombre}}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div><h4 class="fs-18 mb-0">Pertenece a</h4>
                                                <div class="text-secondary">
                                                    <hr class="my-8">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end"><a
                                                        href="#"
                                                        data-check="true"
                                                        data-group-name="rjInH"
                                                        class="fs-12 text-secondary text-decoration-none checkbox-trigger me-12"
                                                        id="checked-comision-general">Seleccionar
                                                        Todo</a> <a href="#" data-check="false"
                                                                    data-group-name="rjInH"
                                                                    class="fs-12 text-secondary text-decoration-none checkbox-trigger"
                                                                    id="unchecked-comision-general">Quitar
                                                        Todos</a></div>
                                                <fieldset class="m-0 mt-24 p-0">
                                                    @foreach($comisionGeneral as $key => $item)
                                                        <div class="form-check mb-12">
                                                            <div class="form-check">
                                                                <input form="form-filters"
                                                                       class="form-check-input form-filter general-filter check-comision-general"
                                                                       name="comision[]" type="checkbox"
                                                                       id="comision-general-{{$key}}"
                                                                       value="{{$item->id}}">
                                                                <label class="form-check-label"
                                                                       for="comision-general-{{$key}}">
                                                                    {{$item->nombre}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </fieldset>
                                            </div>
                                            <div class="pt-48"><h4 class="fs-18">Género</h4>
                                                <div class="text-secondary">
                                                    <hr class="my-8">
                                                </div>
                                                <fieldset class="m-0 mt-24 p-0">
                                                    <div class="form-check mb-12">
                                                        <input class="form-check-input change-general-filter"
                                                               type="radio" name="genero" value=""
                                                               form="form-filters"
                                                               id="genre_all" checked="checked"> <label
                                                            class="form-check-label" for="genre_all">Mostrar
                                                            Todos</label></div>
                                                    @foreach($genders as $item)
                                                        <div class="form-check mb-12">
                                                            <input
                                                                class="form-check-input form-filter general-filter"
                                                                type="radio" name="genero" value="{{$item->id}}"
                                                                id="genero_{{$item->genero}}"
                                                                form="form-filters"> <label
                                                                class="form-check-label"
                                                                for="genero_{{$item->genero}}">{{$item->genero}}</label>
                                                        </div>
                                                    @endforeach
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($tipoComision as $key => $item)
                                    <div class="tab-pane fade" id="tab-{{$key}}" role="tabpanel"
                                         aria-labelledby="{{$key}}-tab" tabindex="0">
                                        <div>
                                            <h4 class="fs-18 mb-0">{{$item->valor}}</h4>
                                            <div class="text-secondary">
                                                <hr class="my-8">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="#"
                                                   data-check="true"
                                                   data-group-name="APAUk"
                                                   class="fs-12 text-secondary text-decoration-none checkbox-trigger me-12"
                                                   id="checked-{{$key}}">Seleccionar
                                                    Todo</a> <a href="#" data-check="false" data-group-name="APAUk"
                                                                class="fs-12 text-secondary text-decoration-none checkbox-trigger"
                                                                id="unchecked-{{$key}}">Quitar
                                                    Todos</a></div>

                                            <div class="row gx-48 mt-24">
                                                <div class="col-12 col-lg-12">
                                                    <div class="row">
                                                        @foreach($item->comision->sortBy('importancia') as $i => $comision)
                                                            @if($comision->nombre != "Junta de Coordinación Política (Jucopo)" && $comision->nombre != "Directiva del Primer Mes del Primer Periodo Ordinario de Sesiones del Tercer Año de Ejercicio Constitucional")
                                                                <div class="col-lg-6">
                                                                    <div class="form-check">
                                                                        <input form="form-filters"
                                                                               class="form-check-input form-filter comision-filter-{{$key}} check-{{$key}}"
                                                                               name="comision[]"
                                                                               type="checkbox"
                                                                               value="{{$comision->id}}"
                                                                               id="comision-{{$key}}-{{$i}}">
                                                                        <label class="form-check-label"
                                                                               for="comision-{{$key}}-{{$i}}">{{$comision->nombre}}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div
                                class="d-flex flex-column flex-md-row-reverse align-items-center justify-content-start mt-32">
                                <button type="submit" form="form-filters" data-bs-dismiss="modal"
                                        class="btn btn-darker d-flex align-items-center justify-content-center rounded-4 py-16 w-100 w-md-180 mb-16 mb-md-0">
                                    <i class="bi bi-arrow-right-short fs-24 me-8 lh-1"></i>
                                    <span>Aplicar Filtros</span></button>
                                <a
                                    class="btn btn-light rounded-4 py-16 w-100 w-md-160 me-md-20 mb-16 mb-md-0"
                                    data-bs-dismiss="modal">Cancelar</a>
                                <button type="button"
                                        class="btn btn-link text-secondary py-16 me-lg-20 mb-16 mb-lg-0 clear-form">
                                    Borrar
                                    todos
                                    los
                                    filtros
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            var data;
            $("#form-filters").submit(function (e) {
                e.preventDefault();
                getData();
            });

            function getData() {
                $.ajax({
                    url: "{{route("get_diputados")}}",
                    type: "POST",
                    data: $("#form-filters").serialize(),
                    dataType: "json",
                    success: function (success) {
                        data = success;
                        $(".order-apellido").click();
                        listDiputado(success)
                    }
                })
            }

            function listDiputado(data) {
                $("#list-diputados").empty();
                switch (data.tipo) {
                    case "simple":
                        $(".diputado-order").show();
                        $(".comisiones-order").hide();
                        let html = "";
                        html += '<div class="mb-24">';
                        html += '<div class="text-secondary my-24">'
                        html += '<hr>'
                        html += '</div>';
                        html += '<div class="d-flex align-items-center">';
                        html += '<p class="fs-24 me-12 mb-0">'
                        html += 'Resultados: ' + "<strong><span id='orden-result-text'></span></strong>";
                        html += '</p>';
                        html += '<span class="d-flex align-items-center justify-content-center bg-purple-light rounded-circle fs-16 w-32 h-32">';
                        html += '<span class="fw-bold text-purple">' + data.data.length + '</span>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div class="row align-items-stretch g-24">';

                        $.each(data.data, function (i, v) {
                            // console.log('storage/files/legislativoedomex/' + v.diputado.foto.path )
                            html += '<div class="col-12 col-lg-3">'
                            html += '<div class="card-diputado-sm">';
                            html += '<div class="bg-lighter rounded-top-4 position-relative h-100 w-100">';
                            html += '<figure class="mb-0 ratio ratio-1x1">';
                            if (v.diputado.foto) {
                                html += '<img src="'+ 'storage/files/legislativoedomex/' + v.diputado.foto.path + '" class="img-fluid">'
                                console.log('storage/files/legislativoedomex/' + v.diputado.foto.path )
                            }
                            html += '</figure>';
                            html += '<div class="position-absolute top-0 end-0 p-16">' + v.partido.siglas + '</div>';
                            html += '</div>';
                            html += '<div class="border border-top-0 rounded-bottom-4 p-16">';
                            if (data.nombre) {
                                html += '<h4 class="fs-16">' + v.diputado.nombres + " " + v.diputado.apaterno + '</h4>';

                            } else {
                                html += '<h4 class="fs-16">' + v.diputado.apaterno + " " + v.diputado.nombres + '</h4>';

                            }
                            html += '<p class="fs-12 mb-16">'
                            if (v.distrito.distrito !== "Plurinominal") {
                                html += 'Distrito ';
                            }
                            html += v.distrito.distrito + '</p>'
                            html += '<a href="{{asset("diputadasydiputados")}}/' + v.id + '"class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">';
                            if (v.diputado.genero.genero === "Femenino") {
                                html += 'Ver a mi Diputada';
                            } else {
                                html += 'Ver a mi Diputado';
                            }
                            html += "</a>";
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                        html += '</div>';
                        $("#list-diputados").append(html);
                        $("#text-order").empty().append("Apellido")
                        $("#orden-result-text").empty().append("Apellido")
                        break;
                    default:
                        $(".diputado-order").hide();
                        $(".comisiones-order").show();
                        for (let i = 0; i < data.data.length; i++) {
                            let html = "";
                            html += '<div class="mb-24">';
                            html += '<div class="text-secondary my-24">'
                            html += '<hr>'
                            html += '</div>';
                            html += '<div class="d-flex align-items-center">';
                            html += '<p class="fs-24 me-12 mb-0">'
                            html += data.data[i].nombre;
                            html += '</p>';
                            html += '<span class="d-flex align-items-center justify-content-center bg-purple-light rounded-circle fs-16 w-32 h-32">';
                            html += '<span class="fw-bold text-purple">' + data.data[i].integrante_comision.length + '</span>';
                            html += '</div>';
                            html += '</div>';
                            html += '<div class="row align-items-stretch g-24">';
                            $.each(data.data[i].integrante_comision, function (i, v) {
                                html += '<div class="col-12 col-lg-3">'
                                html += '<div class="card-diputado-sm">';
                                html += '<div class="bg-lighter rounded-top-4 position-relative h-100 w-100">';
                                html += '<figure class="mb-0 ratio ratio-1x1">';
                                if (v.integrante_legislatura.diputado.foto) {
                                    html += '<img src="' + 'storage/files/legislativoedomex/' + v.integrante_legislatura.diputado.foto.path + '" class="img-fluid">'
                                }
                                html += '</figure>';
                                html += '<div class="position-absolute top-0 end-0 p-16">' + v.integrante_legislatura.partido.siglas + '</div>';
                                html += '</div>';
                                html += '<div class="border border-top-0 rounded-bottom-4 p-16">';
                                html += '<h4 class="fs-16">' + v.integrante_legislatura.diputado.apaterno + " " + v.integrante_legislatura.diputado.nombres + '</h4>';
                                html += '<p class="fs-12 mb-16">' + v.valor + '</p>'
                                html += '<a href="{{asset("diputadasydiputados")}}/' + v.integrante_legislatura.id + '"class="btn btn-outline-darker border-2 rounded-4 py-16 px-32 d-block">';
                                if (v.integrante_legislatura.diputado.genero.genero === "Femenino") {
                                    html += 'Ver a mi Diputada';
                                } else {
                                    html += 'Ver a mi Diputado';
                                }
                                html += "</a>";
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            });
                            html += '</div>';
                            $("#list-diputados").append(html);
                            $("#text-order").empty().append("Comisiones")

                        }
                }
            }

            $(".form-filter").change(function () {
                let countCheck = [];
                $(".form-filter:checkbox:checked").each(function () {
                    countCheck.push(this.value);
                });
                $(".form-filter:radio:checked").each(function () {
                    countCheck.push(this.value);
                });
                $("#contador-form-filter").empty().append(countCheck.length);
                if (countCheck.length > 0) {
                    $(".clear-form").show();
                } else {
                    $(".clear-form").hide();
                }
            })
            $(".general-filter").change(function () {
                let countGeneralCheck = [];
                $(".general-filter:checkbox:checked").each(function () {
                    countGeneralCheck.push(this.value);
                });
                $(".general-filter:radio:checked").each(function () {
                    countGeneralCheck.push(this.value);
                });
                let msg = "";
                // console.log(countGeneralCheck.length)
                if (countGeneralCheck.length > 0) {
                    msg = countGeneralCheck.length + " Filtros activos";
                } else {
                    msg = "Sin filtros activos";
                }
                $("#contador-general-filter").empty().append(msg);
            });

            $(".order-list").click(function () {
                let valor = parseFloat($(this).data("orden"));
                // console.log($(this).data("orden"))

                let sortedData;
                switch (data.tipo) {
                    case "simple":
                        switch (valor) {
                            case 1:
                                sortedData = data.data.sort((a, b) => {
                                    if (a.distrito.orden < b.distrito.orden) {
                                        return -1;
                                    }
                                    if (a.distrito.orden > b.distrito.orden) {
                                        return 1;
                                    }
                                    return 0;
                                });
                                let distrito = [];
                                let plurinominal = [];
                                $.each(sortedData, function (i, v) {
                                    if (v.distrito.distrito === "Plurinominal") {
                                        plurinominal.push(v);
                                    } else {
                                        distrito.push(v);
                                    }
                                });
                                sortedData = distrito.concat(plurinominal);
                                break;
                            case 3:
                                sortedData = data.data.sort((a, b) => {
                                    if (a.partido.nombre < b.partido.nombre) {
                                        return -1;
                                    }
                                    if (a.partido.nombre > b.partido.nombre) {
                                        return 1;
                                    }
                                    return 0;
                                });
                                break;
                            case 4:
                                sortedData = data.data.sort((a, b) => {
                                    return a.diputado.nombres.localeCompare(b.diputado.nombres);
                                });
                                break;
                            case 6:

                                sortedData = data.data.sort((a, b) => {
                                    if (a.diputado.genero.genero < b.diputado.genero.genero) {
                                        return -1;
                                    }
                                    if (a.diputado.genero.genero > b.diputado.genero.genero) {
                                        return 1;
                                    }
                                    return 0;
                                });
                                let masculino = [];
                                let femenino = [];
                                $.each(sortedData, function (i, v) {
                                    if (v.diputado.genero.genero === "Masculino") {
                                        masculino.push(v);
                                    } else {
                                        femenino.push(v);
                                    }
                                });
                                femenino = femenino.sort((a, b) => {
                                    return a.diputado.apaterno.localeCompare(b.diputado.apaterno);
                                });

                                masculino = masculino.sort((a, b) => {
                                    return a.diputado.apaterno.localeCompare(b.diputado.apaterno);
                                });
                                sortedData = femenino.concat(masculino);
                                break;
                            default:
                                sortedData = data.data.sort((a, b) => {
                                    return a.diputado.apaterno.localeCompare(b.diputado.apaterno);
                                });
                        }
                        let filter = [];
                        filter["tipo"] = "simple";
                        filter["data"] = sortedData;
                        if (valor === 4) {
                            filter["nombre"] = true;
                        }
                        listDiputado(filter);
                        break
                    default:
                        $("#order").val(2).prop("readonly", true);
                }

                $("#text-order").empty().append($(this).data("text"))
                $("#orden-result-text").empty().append($(this).data("text"))

            });

            $("#checked-partido").click(function () {
                $(".check-partido").prop("checked", true);
                $(".general-filter").change();
            });
            $("#unchecked-partido").click(function () {
                $(".check-partido").prop("checked", false);
                $(".general-filter").change();
            });
            $("#checked-comision-general").click(function () {
                $(".check-comision-general").prop("checked", true);
                $(".general-filter").change();
            });
            $("#unchecked-comision-general").click(function () {
                $(".check-comision-general").prop("checked", false);
                $(".general-filter").change();
            });

            @foreach($tipoComision as $key => $item)
            $("#checked-{{$key}}").click(function () {
                $(".check-{{$key}}").prop("checked", true);
                $(".comision-filter-{{$key}}").change();
            });
            $("#unchecked-{{$key}}").click(function () {
                $(".check-{{$key}}").prop("checked", false);
                $(".comision-filter-{{$key}}").change();
            });

            $(".comision-filter-{{$key}}").change(function () {
                let countGeneralCheck = [];
                $(".comision-filter-{{$key}}:checkbox:checked").each(function () {
                    countGeneralCheck.push(this.value);
                });
                let msg = "";
                if (countGeneralCheck.length > 0) {
                    msg = countGeneralCheck.length + " Filtros activos";
                } else {
                    msg = "Sin filtros activos";
                }
                $("#contador-{{$key}}-filter").empty().append(msg);

            });
            @endforeach

            $("#crit").keyup(function () {
                $.ajax({
                    url: "{{route("search_integrante")}}",
                    type: "POST",
                    data: {crit: $(this).val()},
                    dataType: "json",
                    success: function (success) {
                        data = success;
                        $(".order-apellido").click();
                        listDiputado(success)
                    }
                })
            });

            $(".change-general-filter").click(function () {
                $(".general-filter").change();
            });

            $("#open-modal").click(function () {
                $(".general-filter").change();
                @foreach($tipoComision as $key => $item)
                $(".comision-filter-{{$key}}").change();
                @endforeach
            });
            $(".clear-form").click(function () {
                $("#form-filters")[0].reset();
                getData();
                $("#contador-form-filter").empty().append(0);
                $(".general-filter").change();
                @foreach($tipoComision as $key => $item)
                $(".comision-filter-{{$key}}").change();
                @endforeach
            });
            getData();
            $(".clear-form").click();
        });
    </script>
@endpush
