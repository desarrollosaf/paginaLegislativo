<div class="modal bd-example-modal-lg" id="modal-fotos" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style=" background-color: #f0eded !important;">
            <div class="modal-header">
                <h6 class="modal-title">Agregar foto</h6>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route'=>'comunicados.create_foto', 'method'=>'POST', 'files' => true, 'role' => 'form', "id" => "form-fotos"]) !!}
                        @csrf
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Cargar fotos</label>
                                <input class="form-control" type="file" id="foto" name="foto[]" multiple>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modal-close" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="add-foto" form="form-fotos">Agregar</button>
            </div>
        </div>
    </div>
</div>
@push("page-scripts")
    <script type="text/javascript">
        var fotos = [];
        @if(isset($data) && count($data->foto))
        let data;
        @foreach($data->foto as $item)
        fotos.push({"path": "{{$item->path}}"})
        @endforeach
        @endif
        $(document).ready(function () {
            listFotos();
            $("#show-modal-foto").click(function () {
                $("#modal-fotos").show();
            });
            $(".modal-close").click(function () {
                $(".modal").hide();
            });

            $('#form-fotos').validate({
                rules: {
                    foto: {
                        extension: "png|jpg"
                    },
                },
                messages: {
                    foto: {
                        extension: "Por favor ingresa un formato valido .jpg o .png"
                    },
                },
                submitHandler: function () {
                    $.ajax({
                        url: "{{route("comunicados.create_foto")}}",
                        type: "POST",
                        processData: false,
                        contentType: false,
                        data: new FormData($('#form-fotos').get(0)),
                        dataType: "json",
                        success: function (resp) {
                            console.log(resp);
                            for (const element of resp) {
                                fotos.push(element)
                            }
                            listFotos();
                            clearFotosForm()
                        },
                        error: function () {

                        }
                    });
                }
            });

            $(document).on("click", ".delete-foto", function () {
                let index = $(this).data("id");
                fotos.splice(index, 1);
                listFotos();
            });

            function listFotos() {
                $("#fotos-table-body").empty();
                let html = "";
                if (fotos.length > 0) {
                    for (let i = 0; i < fotos.length; i++) {
                        let index = i + 1;
                        html += "<tr>";
                        html += "<td>" + index + "</td>";
                        html += "<td>" + "<img src='{{asset("/")}}" + fotos[i].path + "'>" + "</td>";
                        html += "<td>" + "<button type='button' class='btn btn-sm btn-danger text-light text-center delete-foto' data-id='" + i + "'>x</button>" + "</td>";
                        html += "</tr>"
                    }
                } else {
                    html += "<tr><td colspan='3' class='text-center'>No hay fotos</td></tr>"
                }

                $("#fotos-table-body").append(html);

            }

            function clearFotosForm() {
                var form = $('#form-fotos');
                form[0].reset();
                form.validate().resetForm();
                $(".modal").hide();
            }
        });
    </script>
@endpush
