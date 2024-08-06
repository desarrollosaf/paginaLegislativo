<div class="modal bd-example-modal-lg" id="modal-decretos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Agregar decreto</h6>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route'=>'iniciativas.create_decreto', 'method'=>'POST', 'files' => true, 'role' => 'form', "id" => "form-decretos"]) !!}
                        @csrf
                        <div class="mb-3">
                            <div class="col">
                                {!! Form::label('fecha_decreto', 'Fecha de decreto:', array('class' => 'form-label')) !!}
                                <div class="input-group date datepicker fecha_picker">
                                    {!! Form::text('fecha_decreto',null,['class'=>'form-control', "id" => "fecha_decreto"]) !!}
                                    <span class="input-group-text input-group-addon"><i
                                            data-feather="calendar"></i></span>
                                </div>
                                <div class="col">
                                    {!! Form::label('numero_decreto', 'Número de decreto:', array('class' => 'form-label')) !!}
                                    {!! Form::text('numero_decreto', null,['class'=>'form-control', "id" => "numero_decreto"]) !!}
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col">
                                    {!! Form::label('nombre_decreto', 'Acuerdo:', array('class' => 'form-label')) !!}
                                    {!! Form::textarea('nombre_decreto', null,['class'=>'form-control',"rows" => 1, "id" => "nombre_decreto"]) !!}
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="documento_decreto" class="form-label">Cargar documento</label>
                                <input class="form-control" type="file" id="documento_decreto" name="documento_decreto">
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="add-decreto" form="form-decretos">Agregar</button>
            </div>
        </div>
    </div>
</div>
@push("page-scripts")
    <script type="text/javascript">
        var decretos = [];
        $(document).ready(function () {
            $("#show-modal-decreto").click(function () {
                $("#modal-decretos").show();
            });
            $(".modal-close").click(function () {
                $(".modal").hide();
            });

            $('#form-decretos').validate({
                rules: {
                    fecha_decreto: {
                        required: true
                    },
                    numero_decreto: {
                        required: true,
                        number: true,
                        remote: {
                            url: "{{route("iniciativas.get_decreto")}}",
                            type: "POST",
                            data: {folio: $("#numero_decreto").val(), _token: '{{csrf_token()}}'},
                        }
                    },
                    nombre_decreto: {
                        required: true
                    },
                    documento_decreto: {
                        extension: "doc|docx"
                    },
                },
                messages: {
                    fecha_decreto: {
                        required: "Ingresa fecha"
                    },
                    numero_decreto: {
                        required: "El campo es requerido",
                        number: "El campo solo acepta números",
                    },
                    nombre_decreto: {
                        required: "Ingresa nombre del decreto"
                    },
                    documento_decreto: {
                        extension: "Por favor ingresa un formato valido .doc o .docx"
                    },
                },
                submitHandler: function () {
                    $.ajax({
                        url: "{{route("iniciativas.create_decreto")}}",
                        type: "POST",
                        processData: false,
                        contentType: false,
                        data: new FormData($('#form-decretos').get(0)),
                        dataType: "json",
                        success: function (resp) {
                            decretos.push(resp);
                            listDecretos();
                            clearDecretosForm()
                        },
                        error: function () {

                        }
                    });
                }
            });

            $(document).on("click", ".delete-decreto", function () {
                let index = $(this).data("id");
                decretos.splice(index, 1);
                listDecretos();
            });

            function listDecretos() {
                $("#decretos-table-body").empty();
                let html = "";
                if (decretos.length > 0) {
                    for (let i = 0; i < decretos.length; i++) {
                        html += "<tr>";
                        let n = i + 1;
                        html += "<td>" + n + "</td>";
                        html += "<td>" + decretos[i].nombre_decreto + "</td>";
                        html += "<td>" + decretos[i].numero_decreto + "</td>";
                        html += "<td>" + "<button type='button' class='btn btn-sm btn-danger text-light text-center delete-decreto' id='" + decretos[0].id + "' data-id='" + i + "'>x</button>" + "</td>";
                        html += "</tr>"
                    }
                } else {
                    html += "<tr><td colspan='3' class='text-center'>No hay decretos</td></tr>"
                }

                $("#decretos-table-body").append(html);

            }

            function clearDecretosForm() {
                var form = $('#form-decretos');
                form[0].reset();
                form.validate().resetForm();
                $(".modal").hide();
            }
        });
    </script>
@endpush
