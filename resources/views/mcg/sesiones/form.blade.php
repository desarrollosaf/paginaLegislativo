<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form id="signupForm">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="mb-4">
                                {!! Form::label('sesion.sesion', 'Número de sesión:', array('class' => 'form-label')) !!}
                                {!! Form::text('sesion[sesion]',isset($data) ? $data->sesion : null,['class'=>'form-control', 'placeholder'=>'Ej. 1', 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="mb-4">
                                {!! Form::label('sesion.tipo_sesion_id', 'Tipo de-sesion:', array('class' => 'form-label')) !!}
                                {!! Form::select('sesion[tipo_sesion_id]', $selects[3], isset($data) ? $data->tipo_sesion_id : null ,['class'=>'form-control', 'placeholder'=>'Selecciona categoría', "id" => "tipo_sesion_id"]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="mb-4">
                                {!! Form::label('sesion.legislatura_id', 'Legislatura:', array('class' => 'form-label')) !!}
                                {!! Form::select('sesion[legislatura_id]', $selects[4], isset($data) ? $data->legislatura_id : null,['class'=>'form-control', 'placeholder'=>'Selecciona la legislatura', "id" => "legislatura_id"]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-sm-12">
                                {!! Form::datetimeLocal('sesion[fecha]',isset($data->agenda->agenda) ? $data->agenda->agenda->fecha_hora  : null,['class'=>'form-control', 'required' => 'required']) !!}
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            {!! Form::label('sesion.tipo_asamblea_id', 'Asamblea:', array('class' => 'form-label')) !!}
                            {!! Form::select('sesion[tipo_asamblea_id]', $selects[5], isset($data) ? $data->tipo_asamblea_id : null,['class'=>'form-control', 'placeholder'=>'Selecciona asamblea', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-sm-12">
                            {!! Form::label('sesion.regimen_id', 'Regimen:', array('class' => 'form-label')) !!}
                            {!! Form::select('sesion[regimen_id]', $selects[2], isset($data) ? $data->regimen_id : null,['class'=>'form-control', 'placeholder'=>'Selecciona el regimen', "id" => "regimen_id"]) !!}
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            {!! Form::label('sesion.anio_id', 'Año:', array('class' => 'form-label')) !!}
                            {!! Form::select('sesion[anio_id]', $selects[0], isset($data) ? $data->anio_id : null,['class'=>'form-control', 'placeholder'=>'Selecciona el año', "id" => "anio_id"]) !!}
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            {!! Form::label('sesion.periodo_id', 'Periodo:', array('class' => 'form-label')) !!}
                            {!! Form::select('sesion[periodo_id]', $selects[1], isset($data) ? $data->periodo_id : null,['class'=>'form-control', 'placeholder'=>'Selecciona el periodo', "id" => "periodo_id"]) !!}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="documento_ordendia" class="form-label">Cargar orden del dia</label>
                        <input class="form-control" type="file" id="documento_ordendia"
                               name="documento_ordendia">
                    </div>
                    <div class="mb-3">
                        <label for="documento_actasesion" class="form-label">Cargar acta de la sesion</label>
                        <input class="form-control" type="file" id="documento_actasesion"
                               name="documento_actasesion">
                    </div>
                    <div class="mb-3">
                        <label for="documento_estenografia" class="form-label">Cargar versión estenográfica</label>
                        <input class="form-control" type="file" id="documento_estenografia"
                               name="documento_estenografia">
                    </div>

                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</div>
