<div class="modal bd-example-modal-lg" id="modal-comisiones" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style=" background-color: #f0eded !important;">
            <div class="modal-header">
                <h6 class="modal-title">Agregar comisión</h6>
            </div>
            <div class="modal-body">
                <form id="form-comison">
                    <div class="col">
                        {!! Form::label('comision', 'Comisión:', array('class' => 'form-label')) !!}
                        {!! Form::select('comision', $selects[1], null,['class'=>'js-example-basic-multiple form-select form-control', "id" => "select-comision", "multiple" => "multiple", "data-width"=> "100%"]) !!}
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="form-comison">Agregar</button>
            </div>
        </div>
    </div>
</div>
@push("page-scripts")
    <script type="text/javascript">
        var comisiones = [];
        @if(isset($data) && count($data->comision))
        @foreach($data->comision as $key => $item)
        comisiones.push(["{{$item->comision->id}}", "{{$item->comision->nombre}}"])
        @endforeach
        @endif
        $(document).ready(function () {
            listComisiones();
            $("#show-modal-comision").click(function () {
                clearComisionesForm();
                $("#modal-comisiones").show();
            });
            $(".modal-close").click(function () {
                $(".modal").hide();
            });
            $("#form-comison").validate({
                rules: {
                    comision: {
                        required: true
                    }
                },
                messages: {
                    comision: {
                        required: "Selecciona comision"
                    }
                },
                submitHandler: function (form) {
                    let comision = $("#select-comision option:selected").text();
                    let id = $("#select-comision").val();
                    $("#select-comision :selected").each(function () {
                        var exist = comisiones.filter(name => name.includes($(this).text()))
                        if (exist.length === 0) {
                            comisiones.push([$(this).val(), $(this).text()])
                            listComisiones();
                        }
                    });
                    $(".tipo-autor-select-active").val("");
                    $(".tipo-autor-select-active").trigger("change");
                    clearComisionesForm()
                    return false;
                }
            });

            $(document).on("click", ".delete-comision", function () {
                let index = $(this).data("id");
                comisiones.splice(index, 1);
                listComisiones();
            });

            function listComisiones() {
                $("#comisiones-table-body").empty();
                let html = "";
                if (comisiones.length > 0) {
                    for (let i = 0; i < comisiones.length; i++) {
                        html += "<tr>";
                        let n = i + 1;
                        html += "<td>" + n + "</td>";
                        html += "<td>" + comisiones[i][1] + "</td>";
                        html += "<td>" + "<button type='button' class='btn btn-sm btn-danger text-light text-center delete-comision' id='" + comisiones[0] + "' data-id='" + i + "'>x</button>" + "</td>";
                        html += "</tr>"
                    }
                } else {
                    html += "<tr><td colspan='3' class='text-center'>No hay comisiones asignadas</td></tr>"
                }

                $("#comisiones-table-body").append(html);

            }

            function clearComisionesForm() {
                var form = $('#form-comison');
                form[0].reset();
                form.validate().resetForm();
                $(".modal").hide();
            }
        });
    </script>
@endpush
