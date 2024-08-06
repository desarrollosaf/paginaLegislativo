@extends('layouts.app')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
          rel="stylesheet"/>
    <link href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">

@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Diputados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <h2>Comisión</h2>
            <h2 class="text-primary">{{$comision->nombre}}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <form id="form-integrantes">
                    <div class="row mb-4">
                        <div class="col">
                            {!! Form::label('integrante_legislatura_id', 'Integrante:', array('class' => 'form-label')) !!}
                            {!! Form::select('integrante_legislatura_id', $integrantes,  null, ['class'=>'js-example-basic-multiple form-select', 'placeholder' => 'Selecciona integrante', "id" => "integrante_legislatura_id"]) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('tipo_cargo_comision_id', 'Cargo:', array('class' => 'form-label')) !!}
                            {!! Form::select('tipo_cargo_comision_id', $cargos,  null, ['class'=>'js-example-basic-multiple form-select', 'placeholder' => 'Selecciona cargo', "id" => "tipo_cargo_comision_id"]) !!}
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mt-4 add-inegrante"><i
                                    data-feather="plus"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive mt-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Núm.</th>
                        <th>Integrante</th>
                        <th>Cargo</th>
                        <th style="width: 20%">Opciones.</th>
                    </tr>
                    </thead>
                    <tbody id="integrantes-table-body">
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col text-right">
                    <input class="btn btn-primary" id="save-integrantes" type="button" value="Guardar">
                </div>
            </div>
        </div>
    </div>
    <form id="form-integrantes-hide">
        @csrf
        @method("PUT")
    </form>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            var integrantes = [];
            @if(isset($comision) && count($comision->integrante))
                data = {!!  $comision->integrante !!};
            integrantes = data;
            listar()
            @endif
            function listar() {
                $("#integrantes-table-body").empty();
                let html = "";
                integrantes = ordenar();
                if (integrantes.length > 0) {
                    for (let i = 0; i < integrantes.length; i++) {
                        html += "<tr>";
                        let n = i + 1;
                        html += "<td>" + n + "</td>";
                        html += "<td>" + integrantes[i].integrante_legislatura.diputado.nombres + " " + integrantes[i].integrante_legislatura.diputado.apaterno + " " + integrantes[i].integrante_legislatura.diputado.amaterno + "</td>";
                        html += "<td>" + integrantes[i].cargo.valor + "</td>";
                        html += "<td>" + "<button type='button' class='btn btn-sm btn-danger text-light text-center delete-integrante' id='" + integrantes[0].id + "' data-id='" + i + "'>x</button>" + "</td>";
                        html += "</tr>"
                    }
                } else {
                    html += "<tr><td colspan='3' class='text-center'>No hay integrantes</td></tr>"
                }
                $("#integrantes-table-body").append(html);
            }

            function ordenar() {
                return integrantes = integrantes.sort((a, b) => {
                    if (a.cargo.nivel < b.cargo.nivel) {
                        return -1;
                    }
                    if (a.cargo.nivel > b.cargo.nivel) {
                        return 1;
                    }
                    return 0;
                });
            }

            $("#form-integrantes").validate({
                rules: {
                    tipo_cargo_comision_id: {
                        required: true,
                    },
                    integrante_legislatura_id: {
                        required: true,
                    }
                },
                messages: {
                    tipo_cargo_comision_id: {
                        required: "Selecciona tipo cargo"
                    },
                    integrante_legislatura_id: {
                        required: "Selecciona integrante"
                    }
                },
                wrapper: 'span',
                errorPlacement: function (error, element) {
                    error.addClass("invalid-feedback");

                    if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else if (element.prop('type') === 'radio' && element.parent('.radio-inline').length) {
                        error.insertAfter(element.parent().parent());
                    } else if (element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.appendTo(element.parent().parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass) {
                    if ($(element).prop('type') !== 'checkbox' && $(element).prop('type') !== 'radio') {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    }
                },
                unhighlight: function (element, errorClass) {
                    if ($(element).prop('type') !== 'checkbox' && $(element).prop('type') !== 'radio') {
                        $(element).addClass("is-valid").removeClass("is-invalid");
                    }
                },
                submitHandler: function () {
                    let integrante = $("#integrante_legislatura_id option:selected");
                    let cargo = $("#tipo_cargo_comision_id option:selected");
                    let existCargo = integrantes.filter(name => name.cargo.valor.includes(cargo.text()));
                    let existIntegrante = integrantes.filter(name => name.integrante_legislatura.id.includes(integrante.val()));
                    if (existIntegrante.length === 0) {
                        if (cargo.text() === "Presidencia") {
                            if (existCargo.length === 0) {
                                getObjCargoDip(integrante.val(), cargo.val());
                            } else {
                                alert("warning", "Advertencia", "El cargo ya ha sido asignado");
                            }
                        } else if (cargo.text() === "Vicepresidencia") {
                            if (existCargo.length < 2) {
                                getObjCargoDip(integrante.val(), cargo.val());
                            } else {
                                alert("warning", "Advertencia", "Se han ocupado las plazas para este cargo");
                            }
                        } else {
                            getObjCargoDip(integrante.val(), cargo.val());
                        }

                    } else {
                        alert("warning", "Advertencia", "El integrante ya pertenece a la comisión");

                    }
                    return false;
                },
            });

            function clearForm() {
                var form = $('#form-integrantes');
                form.validate().resetForm();
                form.get(0).reset();
                $("#integrante_legislatura_id").val("");
                $("#tipo_cargo_comision_id").val("");
            }

            function getObjCargoDip(integrante, cargo) {
                $.ajax({
                    url: "{{route("get_cargo_dip")}}",
                    type: "POST",
                    data: {
                        integrante: integrante,
                        cargo: cargo,
                        _token: '{{csrf_token()}}',
                    },
                    dataType: "json",
                    success: function (success) {
                        integrantes.push(success)
                        listar();
                        clearForm();
                    },
                })
            }

            function alert(icon, title, text) {
                swal.fire({
                    title: title,
                    text: text,
                    icon: icon,
                    timer: 2000,
                    showConfirmButton: false
                })
            }

            $("#save-integrantes").click(function () {
                swal.fire({
                    title: "Advertencia",
                    text: "¿Deseas guardar la información?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.value) {
                        let form = $("#form-integrantes-hide");
                        var formData = new FormData(form.get(0));
                        formData.append('integrantes', JSON.stringify(integrantes));
                        $.ajax({
                            url: "{{route("save_integrantes_comision", $comision->id)}}",
                            type: "POST",
                            processData: false,
                            contentType: false,
                            data: formData,
                            dataType: "json",
                            success: function (success) {
                                location.reload();
                                {{--window.location.href = "{{route("comision.index")}}"--}}
                            },
                            error: function (error) {
                                console.log(error)
                            }
                        })
                    }
                });
            })
            $(document).on("click", ".delete-integrante", function () {
                let index = $(this).data("id");
                integrantes.splice(index, 1);
                listar();
            });
        });
    </script>
@endpush
