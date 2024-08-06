<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$ruta}}</h4>
                <form id="signupForm">
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('iniciativa.folio', 'Folio:', array('class' => 'form-label')) !!}
                            {!! Form::text('iniciativa[folio]',isset($data) ? $data->folio : null,['class'=>'form-control', 'placeholder'=>'Folio', 'required' => 'required']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('iniciativa.categoria_id', 'Categoría:', array('class' => 'form-label')) !!}
                            {!! Form::select('iniciativa[categoria_id]', $selects[0], isset($data) ? $data->categoria_id : $id,['class'=>'form-control', 'placeholder'=>'Selecciona categoría', "readonly", "id" => "categoria"]) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('iniciativa.iniciativa', 'Iniciativa:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('iniciativa[iniciativa]',isset($data) ? $data->iniciativa : null,['class'=>'form-control', 'placeholder'=>'Iniciativa', "rows" => 4]) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('iniciativa.fecha_presentacion', 'Fecha de presentación:', array('class' => 'form-label')) !!}
                            <div class="input-group date datepicker fecha_picker">
                                {!! Form::text('iniciativa[fecha_presentacion]',isset($data) ? $data->fecha_presentacion : null,['class'=>'form-control', 'required' => 'required']) !!}
                                <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>

                        <div class="col">
                            {!! Form::label('iniciativa.fecha_expedicion', 'Fecha de expedición:', array('class' => 'form-label')) !!}
                            <div class="input-group date datepicker fecha_picker">
                                {!! Form::text('iniciativa[fecha_expedicion]', isset($data) ? $data->fecha_expedicion : null,['class'=>'form-control', 'required' => 'required']) !!}
                                <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="row">--}}
                    {{--                        <div class="mb-3">--}}
                    {{--                            <label for="logotipo" class="form-label">Cargar logotipo</label>--}}
                    {{--                            <input class="form-control" type="file" id="logotipo" name="logotipo">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="row mt-3">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Autores</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-autor">
                                        Agregar autor
                                    </button>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Núm.</th>
                                                <th>Tipo de autor</th>
                                                <th>Autor</th>
                                                <th>Nivel</th>
                                                <th style="width: 20%">Opciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="autores-table-body">
                                            {{--                                            @if(isset($data) && count($data->autor))--}}
                                            {{--                                                @foreach($data->autor as $key => $item)--}}
                                            {{--                                                    <tr>--}}
                                            {{--                                                        <td>{{$key + 1}}</td>--}}
                                            {{--                                                        <td>{{$item->tipo->valor}}</td>--}}
                                            {{--                                                        <td>{{$item->name->nombre}}</td>--}}
                                            {{--                                                        <td>{{$item->nivel->valor}}</td>--}}
                                            {{--                                                    </tr>--}}
                                            {{--                                                @endforeach--}}
                                            {{--                                            @else--}}
                                            <tr>
                                                <td colspan="5" class="text-center">No hay autores</td>
                                            </tr>
                                            {{--                                            @endif--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Comisiones</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-comision">
                                        Agregar comisión
                                    </button>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Núm.</th>
                                                <th>Comisión.</th>
                                                <th style="width: 20%">Opciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="comisiones-table-body">
                                            <tr>
                                                <td colspan="3" class="text-center">No hay comisiones asignadas</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Acuerdos</h6>
                                    <div class="mb-3">
                                        <div class="col">
                                            {!! Form::label('acuerdo.fecha_acuerdo', 'Fecha de acuerdo:', array('class' => 'form-label')) !!}
                                            <div class="input-group date datepicker fecha_picker">
                                                {!! Form::text('acuerdo[fecha_acuerdo]', isset($data->acuerdo) ? $data->acuerdo->fecha_acuerdo : null,['class'=>'form-control']) !!}
                                                <span class="input-group-text input-group-addon"><i
                                                        data-feather="calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="col">
                                                {!! Form::label('acuerdo.nombre_acuerdo', 'Acuerdo:', array('class' => 'form-label')) !!}
                                                {!! Form::textarea('acuerdo[nombre_acuerdo]', isset($data->acuerdo) ? $data->acuerdo->nombre_acuerdo : null,['class'=>'form-control', "rows" => 1]) !!}
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="documento_acuerdo" class="form-label">Cargar acuerdo</label>
                                            <input class="form-control" type="file" id="documento_acuerdo"
                                                   name="documento_acuerdo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Decretos</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-decreto">
                                        Agregar decreto
                                    </button>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Núm.</th>
                                                <th>Decreto.</th>
                                                <th>Folio.</th>
                                                <th style="width: 20%">Opciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="decretos-table-body">
                                            <tr>
                                                <td colspan="4" class="text-center">No hay decretos</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@include("mcg.iniciativas._comisiones")
@include("mcg.iniciativas._decretos")
@include("mcg.iniciativas._autores")
@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $('.modal  .js-example-basic-multiple').each(function () {
                var $p = $(this).parent();
                $(this).select2({
                    dropdownParent: $p
                });
            });
            $('#form-iniciativas').validate({
                rules: {
                    "iniciativa[folio]": {
                        required: true,
                        number: true,
                        remote: {
                            url: "{{route("iniciativas.get_folio")}}",
                            type: "POST",
                            data: {
                                folio: $("#folio").val(),
                                _token: '{{csrf_token()}}',
                                @isset($data) this: {{$data->folio}}@endisset
                            },
                        }
                    },
                    "iniciativa[categoria_id]": {
                        required: true
                    },
                    "iniciativa[iniciativa]": {
                        required: true
                    },
                    "iniciativa[fecha_presentacion]": {
                        required: true
                    },
                    logotipo: {
                        extension: "jpg|JPEG|png"
                    }
                },
                messages: {
                    "iniciativa[folio]": {
                        required: "Ingresa el folio",
                        number: "Solo se aceptan números",
                        remote: "El folio ya existe"
                    },
                    "iniciativa[categoria_id]": {
                        required: "Selecciona categoría"
                    },
                    "iniciativa[iniciativa]": {
                        required: "Ingresa texto para la iniciativa"
                    },
                    "iniciativa[fecha_presentacion]": {
                        required: "Ingresa fecha de presentación"
                    },
                    logotipo: {
                        extension: "Por favor ingresa un formato valido .jpg, JPEG o .png"
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
                    let form = $('#form-iniciativas');
                    var formData = new FormData(form.get(0));
                    formData.append("autores", JSON.stringify(autores));
                    formData.append("comisiones", JSON.stringify(comisiones));
                    formData.append("decretos", JSON.stringify(decretos));
                    $.ajax({
                        url: form.attr("action"),
                        type: form.attr("method"),
                        processData: false,
                        contentType: false,
                        data: formData,
                        dataType: "json",
                        success: function (resp) {
                            window.location.href = "{{asset("mcg/iniciativas/redirect/back/")}}/" + $("#categoria").val();
                        },
                        error: function () {

                        }
                    });
                }
            });
        });
    </script>
@endpush
