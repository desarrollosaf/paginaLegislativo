<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Banners </h4>
                <form id="signupForm">
                    <div class="mb-4">
                        <div class="form-check form-check-inline">
                            {!! Form::radio('data[tipo]', "true", true, ['class'=>'form-check-input']) !!}
                            <label class="form-check-label" for="tipo">
                                Liga
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            {!! Form::radio('data[tipo]', "false", false, ['class'=>'form-check-input']) !!}
                            <label class="form-check-label" for="tipo">
                                Documento
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        {!! Form::label('titulo', 'Titulo', array('class' => 'form-label')) !!}
                        {!! Form::textarea('data[titulo]',  null,['class'=>'form-control select-autor', 'placeholder'=>'', "id" => "titulo", "rows" => 2]) !!}
                    </div>
                    <div class="mb-3 liga">
                        {!! Form::label('path', 'Liga', array('class' => 'form-label')) !!}
                        {!! Form::textarea('data[liga]',  null,['class'=>'form-control', 'placeholder'=>'', "id" => "titulo", "rows" => 1]) !!}
                    </div>
                    <div class="mb-3 documento">
                        {!! Form::label('documento', 'Documento', array('class' => 'form-label')) !!}
                        {!! Form::file('documento[documento]',['class'=>'form-control', "id" => "documento"]) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('banner', 'Imagen', array('class' => 'form-label')) !!}
                        {!! Form::file('banner[banner]',['class'=>'form-control', "id" => "documento"]) !!}
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
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
        });
    </script>
@endpush
