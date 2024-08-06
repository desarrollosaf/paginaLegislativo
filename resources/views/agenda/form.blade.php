<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">agenda </h4>
                <form id="signupForm">
                    <div class="row mb-3">
                        <div class="col-4">
                            {!! Form::label('agenda.fecha', 'Fecha:', array('class' => 'form-label')) !!}
                            {!! Form::datetimeLocal('agenda[fecha_hora]', isset($agenda) ? $agenda->fecha_hora : null,['class'=>'form-control', 'required' => 'required']) !!}
                        </div>
                        <div class="col-4">
                            {!! Form::label('agenda.sede_id', 'Sede:', array('class' => 'form-label')) !!}
                            {!! Form::select('agenda[sede_id]',$selects[0], isset($agenda) ? $agenda->sede_id : null,['class'=>'form-control',"placeholder" =>"Selecciona sede", 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('agenda.descripcion', 'Descripción:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('agenda[descripcion]', isset($agenda) ? $agenda->descripcion : null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Anfitriones</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-autor">
                                        Agregar anfitrion
                                    </button>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Núm.</th>
                                                <th>Tipo de anfitrion</th>
                                                <th>Autor</th>
                                                <th style="width: 20%">Opciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="autores-table-body">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        {!! Form::label('agenda.liga', '¿Se transmite en pagina principal?:', array('class' => 'form-label')) !!}
                    </div>
                    <div class="mb-4">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                            {!! Form::radio('agenda[transmision]', "0", isset($agenda) ? $agenda->transmision : 0, ['class' => 'form-check-input', "checked" => "true"]) !!}
                            <label class="form-check-label" for="radioInline">
                                No
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            {!! Form::radio('agenda[transmision]', "1", isset($agenda) ? $agenda->transmision : 0 , ['class' => 'form-check-input id_categoria' ]) !!}

                            <label class="form-check-label id_categoria" for="radioInline">
                                Si
                            </label>
                        </div>
                    </div>
                    <div class="row mb-3" id="transmision">
                        <div class="col-12">
                            {!! Form::label('agenda.liga', 'Liga:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('agenda[liga]', isset($agenda) ? $agenda->liga : null, ['class' => 'form-control','id' => 'liga']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('agenda.inicio', 'Hora de inicio:', array('class' => 'form-label')) !!}
                            {!! Form::datetimeLocal('agenda[fecha_hora_inicio]', isset($agenda) ? $agenda->fecha_hora_inicio : null, ['class' => 'form-control', 'id' => 'fechainicio']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('agenda.fin', 'Hora de fin:', array('class' => 'form-label')) !!}
                            {!! Form::datetimeLocal('agenda[fecha_hora_fin]', isset($agenda) ? $agenda->fecha_hora_fin : null, ['class' => 'form-control', 'id' => 'fechafin']) !!}
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@include("agenda._autores")

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@endpush
@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $('.modal  .js-example-basic-multiple').each(function () {
                var $p = $(this).parent();
                $(this).select2({
                    dropdownParent: $p
                });
            });
            let transmision = $("#transmision");
            transmision.hide();
            transmision.find("input").prop("disabled", true);
            $(".form-check-input").click(function () {
                let val = $(this).val();
                console.log(val)
                if (val === "0") {
                    transmision.hide();
                    transmision.find("input").prop("disabled", true);
                } else {
                    transmision.show();
                    transmision.find("input").prop("disabled", false);
                    $("#liga").prop("required",true)
                    $("#fechainicio").prop("required",true)
                    $("#fechafin").prop("required",true)
                }
            });
            $('#formAgenda').validate({
                rules: {
                    "agenda[fecha]": {
                        required: true
                    },
                    "agenda[hora]": {
                        required: true
                    },
                    "agenda[sede_id]": {
                        required: true
                    }
                    ,
                    "agenda[descripcion]": {
                        required: true
                    }
                },
                messages: {
                    "agenda[fecha]": {
                        required: "campo requerido"
                    },
                    "agenda[hora]": {
                        required: "campo requerido"
                    },
                    "agenda[sede_id]": {
                        required: "campo requerido"
                    }
                    ,
                    "agenda[descripcion]": {
                        required: "campo requerido"
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
                    let form = $('#formAgenda');
                    var formData = new FormData(form.get(0));
                    formData.append("autores", JSON.stringify(autores));
                    $.ajax({
                        url: form.attr("action"),
                        type: form.attr("method"),
                        processData: false,
                        contentType: false,
                        data: formData,
                        dataType: "json",
                        success: function (resp) {
                            window.location.href = "{{route("agenda.redirect")}}"
                        },
                        error: function () {

                        }
                    });
                }
            });
            $(".form-check-input").click();

        });
    </script>
@endpush
