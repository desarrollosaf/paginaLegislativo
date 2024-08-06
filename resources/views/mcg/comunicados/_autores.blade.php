<div class="modal bd-example-modal-lg" id="modal-autores" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style=" background-color: #f0eded !important;">
            <div class="modal-header">
                <h6 class="modal-title">Autores y Coautores</h6>
            </div>

            <div class="modal-body">
                <form id="form-autores">
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('tipo_autor_id', 'Tipo autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('tipo_autor_id', $selects[5], null,['class'=>'form-control', 'placeholder'=>'Selecciona tipo de autor', "id" => "tipo_autor_id"]) !!}
                        </div>
                    </div>
                    <div class="niveles comision">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $selects[1], null,['class'=>'js-example-basic-multiple form-control select-autor', "id" => "comision","multiple" => "multiple", "data-width"=> "100%"]) !!}
                        </div>
                    </div>
                    <div class="niveles municipio">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $selects[2], null,['class'=>'js-example-basic-multiple form-select select-autor', "id" => "municipior", "multiple" => "multiple", "data-width"=> "100%"]) !!}
                        </div>
                    </div>
                    <div class="niveles partido">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $selects[3], null,['class'=>'js-example-basic-multiple form-select select-autor', "id" => "partido" , "multiple" => "multiple", "data-width"=> "100%"]) !!}
                        </div>
                    </div>
                    <div class="niveles diputado">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $selects[4], null,['class'=>'js-example-basic-multiple form-select select-autor', "id" => "diputado", "multiple" => "multiple", "data-width"=> "100%" ]) !!}
                        </div>
                    </div>
                    <div class="niveles legislatura">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $selects[8], null,['class'=>'js-example-basic-multiple form-select select-autor', "id" => "legislatura", "data-width"=> "100%" ]) !!}
                        </div>
                    </div>
                    <div class="niveles otros">
                        <div class="col">
                            {!! Form::label('autor', 'Autor:', array('class' => 'form-label')) !!}
                            {!! Form::select('autor', $selects[7], null,['class'=>'js-example-basic-multiple form-select select-autor', "id" => "otros", "multiple" => "multiple", "data-width"=> "100%" ]) !!}
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="form-autores">Agregar</button>
            </div>
        </div>
    </div>
</div>
@push("page-scripts")
    <script type="text/javascript">
        var autores = [];
        @if(isset($data) && count($data->autor))
        @foreach($data->autor as $key => $item)
        autores.push(
            {
                autor_id: '{{$item->autor_id}}',
                autor: "{{$item->name}}",
                tipo: "{{$item->tipo->valor}}",
                tipo_autor_id: "{{$item->tipo->id}}",
            });
        @endforeach
        @endif
        $(document).ready(function () {
            listAutores();
            $('.js-example-basic-multiple').select2({
                allowClear: true
            });
            $(".niveles").hide();
            $("#show-modal-autor").click(function () {
                $(".niveles").hide().find("select").prop("disabled", true).removeClass("tipo-autor-select-active");
                clearFormAutores();
                $("#modal-autores").show();
            });
            $(".modal-close").click(function () {
                clearFormAutores();
                $(".modal").hide();
            });
            $("#form-autores").validate({
                rules: {
                    tipo_autor_id: {
                        required: true,
                    },
                    autor: {
                        required: true
                    }
                },
                messages: {
                    tipo_autor_id: {
                        required: "Selecciona tipo autor"
                    },
                    autor: {
                        required: "Selecciona autor"
                    }
                },
                submitHandler: function () {
                    let tipo = $("#tipo_autor_id option:selected").text();
                    let tipoAutorId = $("#tipo_autor_id option:selected").val();
                    $(".tipo-autor-select-active :selected").each(function () {
                        var exist = autores.filter(name => name.autor.includes($(this).text()))
                        if (exist.length === 0) {
                            autores.push(
                                {
                                    autor_id: $(this).val(),
                                    autor: $(this).text(),
                                    tipo: tipo,
                                    tipo_autor_id: tipoAutorId
                                });
                            listAutores();
                        }
                    });
                    $(".tipo-autor-select-active").val("");
                    $(".tipo-autor-select-active").trigger("change");
                    clearFormAutores();
                    $(".modal-close").click();
                    return false;
                },
            });

            $(document).on("click", ".delete-autor", function () {
                let index = $(this).data("id");
                autores.splice(index, 1);
                listAutores();
            });

            $("#tipo_autor_id").change(function () {
                $(".niveles").hide().find("select").prop("disabled", true).removeClass("tipo-autor-select-active");
                let val = $("#tipo_autor_id option:selected").text();
                switch (val) {
                    case "Comision":
                        $(".comision").show().find("select").prop("disabled", false).addClass("tipo-autor-select-active");
                        break;
                    case "Municipio":
                        $(".municipio").show().find("select").prop("disabled", false).addClass("tipo-autor-select-active");
                        break;
                    case "Diputado (a)":
                        $(".diputado").show().find("select").prop("disabled", false).addClass("tipo-autor-select-active");
                        break;
                    case "Otros":
                        $(".otros").show().find("select").prop("disabled", false).addClass("tipo-autor-select-active");
                        break;
                    case "Legislatura":
                        $(".legislatura").show().find("select").prop("disabled", false).addClass("tipo-autor-select-active");
                        break;
                    default:
                        $(".partido").show().find("select").prop("disabled", false).addClass("tipo-autor-select-active");
                        break;
                }
            });

            function listAutores() {
                $("#autores-table-body").empty();
                let html = "";
                if (autores.length > 0) {
                    for (let i = 0; i < autores.length; i++) {
                        html += "<tr>";
                        let n = i + 1;
                        html += "<td>" + n + "</td>";
                        html += "<td>" + autores[i].tipo + "</td>";
                        html += "<td>" + autores[i].autor + "</td>";
                        html += "<td>" + "<button type='button' class='btn btn-sm btn-danger text-light text-center delete-autor' id='" + autores[0] + "' data-id='" + i + "'>x</button>" + "</td>";
                        html += "</tr>"
                    }
                } else {
                    html += "<tr><td colspan='3' class='text-center'>No hay autores asignados</td></tr>"
                }
                $("#autores-table-body").append(html);
            }

            function clearFormAutores() {
                var form = $('#form-autores');
                form.validate().resetForm();
                form.get(0).reset();
            }

        })
        ;
    </script>
@endpush
