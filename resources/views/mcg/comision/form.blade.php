<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">comision </h4>
                <div class="row mb-3">
                    <div class="col-4">
                        {!! Form::label('comision.tipo_comision_id', 'Tipo comision:', array('class' => 'form-label')) !!}
                        {!! Form::select('comision[tipo_comision_id]',$tipo, isset($comision) ? $comision->tipo_comision_id : null,['class'=>'form-control',"placeholder" =>"Selecciona el tipo de evento", 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        {!! Form::label('comision.nombre', 'Nombre:', array('class' => 'form-label')) !!}
                        {!! Form::textarea('comision[nombre]', isset($comision) ? $comision->nombre : null, ['class' => 'form-control', 'placeholder' => '', "rows" => 2]) !!}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        {!! Form::label('comision.alias', 'Alias:', array('class' => 'form-label')) !!}
                        {!! Form::textarea('comision[alias]', isset($comision) ? $comision->alias : null, ['class' => 'form-control', 'placeholder' => '', "rows" => 2]) !!}
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </div>
    </div>
</div>


@push("page-scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $('#form').validate({
                rules: {
                    "comision[tipo_comision_id]": {
                        required: true
                    },
                    "comision[nombre]": {
                        required: true
                    }
                },
                messages: {
                    "comision[tipo_comision_id]": {
                        required: "campo requerido"
                    },
                    "comision[nombre]": {
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
                    let form = $('#form');
                    form.submit();

                    {{--$.ajax({--}}
                    {{--    url: form.attr("action"),--}}
                    {{--    type: form.attr("method"),--}}
                    {{--    processData: false,--}}
                    {{--    contentType: false,--}}
                    {{--    dataType: "json",--}}
                    {{--    success: function (resp) {--}}
                    {{--        --}}{{--window.location.href = "{{route("comision.redirect")}}"--}}
                    {{--    },--}}
                    {{--    error: function () {--}}

                    {{--    }--}}
                    {{--});--}}
                }
            });

        });
    </script>
@endpush
