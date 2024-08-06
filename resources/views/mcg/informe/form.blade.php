<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Crear informe</h4>
                <form id="signupForm">
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $diputados, isset($informe) ? $informe->integrante_legislatura_id : null,['class'=>'js-example-basic-multiple form-select select-autor', "id" => "diputado", "multiple" => "multiple", "data-width"=> "100%" ]) !!}
                        </div>
                        <div class="col">
                            <label for="documento_informe" class="form-label">Cargar documento</label>
                            <input class="form-control" type="file" id="documento_informe" name="documento_informe" accept="application/pdf, .doc, .docx, .odf">
                        </div>
                        <div class="col">
                            <label for="foto_principal" class="form-label">Cargar imagen principal</label>
                            <input class="form-control" type="file" id="foto_principal" name="foto_principal" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="foto_ficha" class="form-label">Cargar imagen ficha</label>
                            <input class="form-control" type="file" id="foto_ficha" name="foto_ficha" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>
                        <div class="col">
                            <label for="foto_descarga" class="form-label">Cargar imagen descarga</label>
                            <input class="form-control" type="file" id="foto_descarga" name="foto_descarga" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>
                        <div class="col">
                            <label for="header_dip" class="form-label">Cargar imagen portada</label>
                            <input class="form-control" type="file" id="header_dip" name="header_dip" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="mb-4">
                            <div class="form-check form-check-inline">
                                {!! Form::radio('tipo', "true", isset($informe) ? ( $informe->type == 1 ? true : false ) : true, ['class'=>'form-check-input']) !!}
                                <label class="form-check-label" for="tipo">
                                    Liga
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                {!! Form::radio('tipo', "false", isset($informe) ? ( $informe->type == 0 ? true : false ) : false, ['class'=>'form-check-input']) !!}
                                <label class="form-check-label" for="tipo">
                                    Video
                                </label>
                            </div>
                        </div>


                        <div class="mb-3 liga">
                            {!! Form::label('path', 'Liga', array('class' => 'form-label')) !!}
                            {!! Form::textarea('liga',  isset($informe) ? $informe->liga : null,['class'=>'form-control', 'placeholder'=>'Ejemplo: <iframe src="https://www.facebook.com/plugins/video.php?height=316&href=https%3A%2F%2Fwww.facebook.com%2Fguillermo.zamacona%2Fvideos%2F283908470363699%2F&show_text=false&width=560&t=0" width="560" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>', "id" => "titulo", "rows" => 1]) !!}
                        </div>

{{--                        <div class="col">--}}
{{--                            {!! Form::label('liga', 'Liga: DEBE SER DEL APARTADO DE INSERTAR  ', array('class' => 'form-label')) !!}--}}
{{--                            {!! Form::textarea('liga',isset($informe) ? $informe->liga : null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: <iframe src="https://www.facebook.com/plugins/video.php?height=316&href=https%3A%2F%2Fwww.facebook.com%2Fguillermo.zamacona%2Fvideos%2F283908470363699%2F&show_text=false&width=560&t=0" width="560" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>', "id" => "liga"]) !!}--}}
{{--                        </div>--}}
                        <div class="mb-3 documento">
                            {!! Form::label('documento', 'Video', array('class' => 'form-label')) !!}
                            {!! Form::file('documento',['class'=>'form-control', "id" => "documento"]) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('fecha_inter', 'Fecha de expedición:', array('class' => 'form-label')) !!}
                            <div class="input-group date datepicker fecha_picker">
                                {!! Form::text('fecha_inter', isset($informe) ? $informe->fecha_inter : null,['class'=>'form-control', 'required' => 'required']) !!}
                                <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Leyes Impulsadas</h6>
                                    <button type="button" class="btn btn-sm btn-primary" id="show-modal-bullet">
                                        Agregar leyes impulsadas
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
@include("mcg.informe._bulletsi")
@include("mcg.informe._fotosi")
@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {

            $(".documento").hide();
            $(".form-check-input").click(function () {
                let liga = $(".liga")
                let documento = $(".documento")
                if ($(this).val() === "true") {
                    liga.show();
                    liga.find("textarea").prop("disabled", false);
                    documento.hide();
                    documento.find("input").prop("disabled", true);
                } else {
                    documento.show();
                    documento.find("input").prop("disabled", false);
                    liga.hide();
                    liga.find("textarea").val("").prop("disabled", true);
                }
            });

            $('.modal  .js-example-basic-multiple').each(function () {
                var $p = $(this).parent();
                $(this).select2({
                    dropdownParent: $p
                });
            });
            @if(isset($informe))

                $('#forminforme').validate({
                    rules: {
                        autor: {
                            required: true,
                        },
                        liga: {
                            required: false,
                        },
                        fecha_inter: {
                            required: false,
                        }
                    },
                    messages: {
                        autor: {
                            required: "Ingresa un diputado",
                        },
                        documento_informe: {
                            required: "Ingresa un documento",
                        },
                        foto_principal: {
                            required: "Ingresa una imagen",
                        },
                        foto_ficha: {
                            required: "Ingresa una imagen",
                        },
                        foto_descarga: {
                            required: "Ingresa una imagen",
                        },
                        liga: {
                            required: "Ingresa una una liga",
                        },
                        fecha_inter: {
                            required: "Ingresa la fecha",
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
                        let form = $('#forminforme');
                        var formData = new FormData(form.get(0));
                        formData.append("bullets", JSON.stringify(bulletsArr));
                        formData.append("fotos", JSON.stringify(fotos));
                        $.ajax({
                            url: form.attr("action"),
                            type: form.attr("method"),
                            processData: false,
                            contentType: false,
                            data: formData,
                            dataType: "json",
                            beforeSend: function () {
                                showLoading()
                            },
                            success: function (resp) {
                                console.log(resp)
                                window.location.href = "{{route("informe.back")}}";
                            },
                            error: function (e) {
                                console.log(e)
                            }
                        });
                    }
                });

                let liga = $(".liga")
                let documento = $(".documento")
                @if($informe->type == 1)
                    liga.show();
                    liga.find("textarea").prop("disabled", false);
                    documento.hide();
                    documento.find("input").prop("disabled", true);

                @else

                    documento.show();
                    documento.find("input").prop("disabled", false);
                    liga.hide();
                    liga.find("textarea").val("").prop("disabled", true);

                @endif
              


            @else

                $('#forminforme').validate({
                    rules: {
                        autor: {
                            required: true,
                        },
                        documento_informe: {
                            required: false,
                        },
                        foto_principal: {
                            required: false,
                        },
                        foto_ficha: {
                            required: false,
                        },
                        foto_descarga: {
                            required: false,
                        },
                        liga: {
                            required: false,
                        },
                        fecha_inter: {
                            required: false,
                        }
                    },
                    messages: {
                        autor: {
                            required: "Ingresa un diputado",
                        },
                        documento_informe: {
                            required: "Ingresa un documento",
                        },
                        foto_principal: {
                            required: "Ingresa una imagen",
                        },
                        foto_ficha: {
                            required: "Ingresa una imagen",
                        },
                        foto_descarga: {
                            required: "Ingresa una imagen",
                        },
                        liga: {
                            required: "Ingresa una una liga",
                        },
                        fecha_inter: {
                            required: "Ingresa la fecha",
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
                        let form = $('#forminforme');
                        var formData = new FormData(form.get(0));
                        formData.append("bullets", JSON.stringify(bulletsArr));
                        formData.append("fotos", JSON.stringify(fotos));
                        $.ajax({
                            url: form.attr("action"),
                            type: form.attr("method"),
                            processData: false,
                            contentType: false,
                            data: formData,
                            dataType: "json",
                            beforeSend: function () {
                                showLoading()
                            },
                            success: function (resp) {
                                console.log(resp)
                                window.location.href = "{{route("informe.back")}}";
                            },
                            error: function (e) {
                                console.log(e)
                            }
                        });
                    }
                });

            @endif

        });
    </script>
@endpush
