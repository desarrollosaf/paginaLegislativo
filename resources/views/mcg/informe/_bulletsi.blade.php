<div class="modal bd-example-modal-lg" id="modal-bullets" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style=" background-color: #f0eded !important;">
            <div class="modal-header">
                <h6 class="modal-title">Bullets</h6>
            </div>
            <div class="modal-body">
                <form id="form-bullets">
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('bullet', ' ', array('class' => 'form-label')) !!}
                            {!! Form::text('bullet',  null,['class'=>'form-control select-autor', 'placeholder'=>'Iniciativa de...', "id" => "bulletID"]) !!}
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="form-bullets">Agregar</button>
            </div>
        </div>
    </div>
</div>
@push("custom-scripts")
    <script type="text/javascript">
        var bulletsArr = [];
        @if(isset($informe) && count($informe->leyesInforme))
            @foreach($informe->leyesInforme as $key => $item)
            bulletsArr.push(
                {
                    id: "{{$item->id}}",
                    texto: "{{$item->bullets}}",
                });
            @endforeach
        @endif
        $(document).ready(function () {
            listBullet();
            $(".niveles").hide();
            $("#show-modal-bullet").click(function () {
                clearFormBullet();
                $("#modal-bullets").show();
            });
            $(".modal-close").click(function () {
                clearFormBullet();
                $(".modal").hide();
            });
            $('#form-bullets').validate({
                rules: {
                    bullet: {
                        required: true,
                    }
                },
                messages: {
                    bullet: {
                        required: "Ingresa un texto"
                    }
                },
                submitHandler: function () {
                    let bullet = $("#bulletID").val();
                    console.log(bullet)
                    bulletsArr.push(
                        {
                            texto: bullet,
                        });
                    listBullet();

                    clearFormBullet();
                    $(".modal-close").click();
                    return false;
                },
            });

            $(document).on("click", ".delete-bullet", function () {
                let index = $(this).data("id");
                bulletsArr.splice(index, 1);
                listBullet();
            });


            function listBullet() {
                $("#bullets-table-body").empty();
                let html = "";
                if (bulletsArr.length > 0) {
                    for (let i = 0; i < bulletsArr.length; i++) {
                        html += "<tr>";
                        let n = i + 1;
                        html += "<td>" + n + "</td>";
                        html += "<td>" + bulletsArr[i].texto + "</td>";
                        html += "<td>" + "<button type='button' class='btn btn-sm btn-danger text-light text-center delete-bullet' id='" + bulletsArr[0] + "' data-id='" + i + "'>x</button>" + "</td>";
                        html += "</tr>"
                        bulletsArr[i].indice = n;
                    }
                } else {
                    html += "<tr><td colspan='3' class='text-center'>No hay bullets asignados</td></tr>"
                }
                $("#bullets-table-body").append(html);
            }

            function clearFormBullet() {
                var form = $('#form-bullets');
                form.validate().resetForm();
                form.get(0).reset();
            }

        });
    </script>
@endpush
