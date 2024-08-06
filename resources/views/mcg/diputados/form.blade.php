<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Diputados </h4>
                <form id="signupForm">
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('apaterno', 'Apellido paterno:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[apaterno]', isset($diputado) ? $diputado->apaterno : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. Orozco', 'id' => 'apaterno', 'name' => 'apaterno']) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('amaterno', 'Apellido materno:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[amaterno]', isset($diputado) ? $diputado->amaterno : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. Dominguez', 'id' => 'amaterno', 'name' => 'amaterno', 'required' => true]) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('nombres', 'Nombres:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[nombres]', isset($diputado) ? $diputado->nombres : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. Júan José ', 'id' => 'nombres', 'name' => 'nombres']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        {{--                        <div class="col">--}}
                        {{--                            {!! Form::label('estatus_id', 'Estatus:', array('class' => 'form-label')) !!}--}}
                        {{--                            {!! Form::select('estatus_id', $estatusdip[0], isset($diputado) ?  : null,['class'=>'form-control', 'placeholder'=>'Selecciona el estatus', 'required' => 'required']) !!}--}}
                        {{--                        </div>--}}

                        <div class="col">
                            {!! Form::label('shortname', 'ShortName:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[shortname]', isset($diputado) ? $diputado->shortname : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. Júan José Dominguez Orozco', 'id' => 'shortname', 'name' => 'shortname']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('fancyurl', 'Fancyurl:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[fancyurl]', isset($diputado) ? $diputado->fancyurl : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. Júan José Dominguez Orozco', 'id' => 'fancyurl', 'name' => 'fancyurl']) !!}
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col">
                            {!! Form::label('Genero', 'genero:', array('class' => 'form-label')) !!}
                            {!! Form::select('genero', $selects[0], isset($diputado) ? $diputado->gender_id : null,['class'=>'form-control', 'placeholder'=>'Selecciona ', 'required' => 'required']) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('email', 'Correo:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[email]', isset($diputado) ? $diputado->email : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. as@hotmail.com', 'id' => 'email', 'name' => 'email']) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('ext', 'Extensión:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[ext]', isset($diputado) ? $diputado->ext : null, ['class' => 'form-control ', 'placeholder' => 'P. Ej. 5422', 'id' => 'ext', 'name' => 'ext']) !!}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('distrito_id', 'Distrito:', array('class' => 'form-label')) !!}
                            {!! Form::select('distrito_id', $distritos[0], isset($diputado) ? $diputado->integranteLegislatura->distrito->id : null,['class'=>'form-control', 'placeholder'=>'Selecciona cun distrito', 'required' => 'required']) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('partido_id', 'Partido:', array('class' => 'form-label')) !!}
                            {!! Form::select('partido_id', $partidos[0], isset($diputado) ? $diputado->integranteLegislatura->partido->id : null,['class'=>'form-control', 'placeholder'=>'Selecciona un partido', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('facebook', 'Facebook:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[facebook]', isset($diputado) ? $diputado->facebook : null, ['class' => 'form-control ', 'placeholder' => ' ', 'id' => 'facebook', 'name' => 'facebook']) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('instagram', 'Instagram:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[instagram]', isset($diputado) ? $diputado->instagram : null, ['class' => 'form-control ', 'placeholder' => ' ', 'id' => 'instagram', 'name' => 'instagram']) !!}
                        </div>

                        <div class="col">
                            {!! Form::label('twitter', 'Twitter:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[twitter]', isset($diputado) ? $diputado->twitter : null, ['class' => 'form-control ', 'placeholder' => ' ', 'id' => 'twitter', 'name' => 'twitter']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            {!! Form::label('ubicacion', 'Ubicacion:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[ubicacion]', isset($diputado) ? $diputado->ubicacion : null, ['class' => 'form-control ', 'placeholder' => ' ', 'id' => 'twitter', 'name' => 'ubicacion']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('link_web', 'Pagina web:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[link_web]', isset($diputado) ? $diputado->link_web : null, ['class' => 'form-control ', 'placeholder' => ' ', 'id' => 'twitter', 'name' => 'link_web']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('telefono', 'Telefono:', array('class' => 'form-label')) !!}
                            {!! Form::text('diputado[telefono]', isset($diputado) ? $diputado->telefono : null, ['class' => 'form-control ', 'placeholder' => ' ', 'id' => 'twitter', 'name' => 'telefono']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="formFile">Foto:</label>
                            <input class="form-control" type="file" id="formFile" name="documento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            {!! Form::label('descripcion', 'Descripcion:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('diputado[descripcion]', isset($diputado) ? $diputado->descripcion : null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'fancyurl', 'name' => 'descripcion', "rows" => 10]) !!}
                        </div>
                    </div>


                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

