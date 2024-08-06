<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Comunicado</h4>
                <form id="signupForm">
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('comunicados.comunicado', 'Número:', array('class' => 'form-label')) !!}
                            {!! Form::text('comunicados[comunicado]', isset($data) ? $data->comunicado : $last, ['class' => 'form-control', 'placeholder' => 'P. Ej. 1', "id" => "comunicado"]) !!}
                        </div>

{{--                        <div class="col">--}}
{{--                            {!! Form::label('comunicados.fecha', 'Fecha de expedición:', array('class' => 'form-label')) !!}--}}
{{--                            <div class="input-group date datepicker fecha_picker">--}}
{{--                                {!! Form::text('comunicados[fecha]',  isset($data) ? $data->fecha : null,['class'=>'form-control', 'required' => 'required']) !!}--}}
{{--                                <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col">
                            {!! Form::label('comunicados.fecha', 'Fecha de expedición:', array('class' => 'form-label')) !!}
                            {!! Form::date('comunicados[fecha]',isset($data) ? $data->fecha : null,['class'=>'form-control', 'required' => 'required']) !!}
                        </div>


                    </div>
                    <div class="row">
                        <div class="col">
                            {!! Form::label('comunicados.titulo', 'Título:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('comunicados[titulo]', isset($data) ? $data->titulo : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. Iniciativa de...', "rows" =>  1]) !!}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-1">
                                {!! Form::label('comunicados.liga', '¿Programar comunicado?:', array('class' => 'form-label')) !!}
                            </div>
                            <div class="mb-4">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                                    {!! Form::radio('comunicados[publicado]', "0", isset($data) ? $data->publicado  : 0, ['class' => 'form-check-input', "checked" => "true"]) !!}
                                    <label class="form-check-label" for="radioInline">
                                        No
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::radio('comunicados[publicado]', "1", isset($data) ? $data->publicado  : 0 , ['class' => 'form-check-input id_categoria' ]) !!}
                                    <label class="form-check-label id_categoria" for="radioInline">
                                        Si
                                    </label>
                                </div>

                            </div>
                            <div class="col" id="fecha_publicacion_div">
                                {!! Form::label('comunicados.fecha_publicacion', 'Fecha de publicación:', array('class' => 'form-label')) !!}
                                {!! Form::datetimeLocal('comunicados[fecha_publicacion]', isset($data) ? $data->fecha_publicacion : null,['class'=>'form-control', 'id' => 'startdos', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Bullets</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-bullet">
                                        Agregar bullet
                                    </button>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Número.</th>
                                                <th>Bullet.</th>
                                                <th style="width: 20%">Acciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="bullets-table-body">
                                            <tr>
                                                <td colspan="4" class="text-center">No hay bullets</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="mb-3">
                            {!! Form::label('comunicados.texto', 'Cuerpo del comunicado:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('comunicados[texto]', isset($data) ? $data->texto : null, ['class' => 'form-control', 'placeholder' => ' ']) !!}
                        </div>
                    </div>

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
                                                <th>Número.</th>
                                                <th>Tipo de autor</th>
                                                <th>Autor</th>
                                                <th style="width: 20%">Acciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="autores-table-body">
                                            <tr>
                                                <td colspan="4" class="text-center">No hay autores</td>
                                            </tr>
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
                                    <h6 class="card-title">Fotos</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-foto">
                                        Agregar foto
                                    </button>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Número.</th>
                                                <th>Foto</th>
                                                <th style="width: 20%">Acciones.</th>
                                            </tr>
                                            </thead>
                                            <tbody id="fotos-table-body">
                                            <tr>
                                                <td colspan="4" class="text-center">No hay autores</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</div>
@include("mcg.comunicados._autores")
@include("mcg.comunicados._bullets")
@include("mcg.comunicados._fotos")
@push("page-scripts")
    <script type="text/javascript">

        $(document).ready(function () {
            $('.modal  .js-example-basic-multiple').each(function () {
                var $p = $(this).parent();
                $(this).select2({
                    dropdownParent: $p
                });
            });

            let fechaPublicacion = $("#fecha_publicacion_div");
            fechaPublicacion.hide();
            fechaPublicacion.find("input").prop("disabled", true)
            let starttes = document.getElementById('startdos');
            starttes.min = (new Date()).toLocaleString( 'sv' ).substr(0, 19);

            @if(isset($data))
                const data = @json($data);
                if(data.publicado == 1){
                    fechaPublicacion.show();
                    fechaPublicacion.find("input").prop("disabled", false);
                    $("#liga").prop("required",true)
                    $("#fecha_publicacion").prop("required",true)
                }

            @endif

            $(".form-check-input").click(function () {
                let val = $(this).val();
                if (val === "0") {
                    fechaPublicacion.hide();
                    fechaPublicacion.find("input").prop("disabled", true);
                } else {
                    fechaPublicacion.show();
                    fechaPublicacion.find("input").prop("disabled", false);
                    $("#liga").prop("required",true)
                    $("#fecha_publicacion").prop("required",true)
                }
            });

            $('#formComunicados').validate({
                rules: {
                    "comunicados[comunicado]": {
                        required: true,
                        number: true,
                        remote: {
                            url: "{{route("comunicados.get_comunicado")}}",
                            type: "POST",
                            data: {
                                comunicado: $("#comunicado").val(),
                                _token: '{{csrf_token()}}',
                                @isset($data) this: {{$data->comunicado}}@endisset
                            },
                        }
                    },
                    "comunicados[fecha]": {
                        required: true
                    },
                    "comunicados[titulo]": {
                        required: true
                    },
                    logotipo: {
                        extension: "jpg|JPEG|png"
                    }
                },
                messages: {
                    "comunicados[comunicado]": {
                        required: "Ingresa Comunicado",
                        number: "Solo se aceptan números",
                        remote: "El comunicado ya existe"
                    },
                    "comunicados[fecha]": {
                        required: "Ingresa fecha del comunicado"
                    },
                    "comunicados[titulo]": {
                        required: "Ingresa titulo"
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
                    let form = $('#formComunicados');
                    var formData = new FormData(form.get(0));
                    formData.append("autores", JSON.stringify(autores));
                    formData.append("bullets", JSON.stringify(bulletsArr));
                    formData.append("fotos", JSON.stringify(fotos));
                    $.ajax({
                        url: form.attr("action"),
                        type: form.attr("method"),
                        processData: false,
                        contentType: false,
                        data: formData,
                        dataType: "json",
                        success: function (resp) {
                            console.log(resp)
                            window.location.href = "{{route("comunicados.back")}}";
                        },
                        error: function (e) {
                            console.log(e)
                        }
                    });
                }
            });


            //$(".form-check-input").click();
        });
    </script>
@endpush
