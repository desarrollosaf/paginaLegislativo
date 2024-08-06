<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $diputada->diputado->nombres}} {{ $diputada->diputado->apaterno}} {{ $diputada->diputado->amaterno}}</h4>

                <form id="signupForm">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="formFile">Foto miniatura:</label>
                            <input class="form-control" type="file" id="shortimages" name="shortimages">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="formFile">Foto principal:</label>
                            <input class="form-control" type="file" id="images" name="images">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            {!! Form::label('descripcion', 'Descripcion:', array('class' => 'form-label')) !!}
                            {!! Form::textarea('descripcion', isset($diputada->diputada) ? $diputada->diputada->descripcion : null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'fancyurl', 'name' => 'descripcion', "rows" => 10]) !!}
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

