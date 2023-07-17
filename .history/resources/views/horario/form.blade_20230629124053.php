<div class="box box-info padding-1">
    <div class="box-body">

        <table class="table align-items-center table-flush">
            <thead>
                <tr>
                    <th scope="col"> Dia </th>
                    <th scope="col"> Activo </th>
                    <th scope="col"> Hora Inicio </th>
                    <th scope="col"> Hora Fin </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dias as $dias)
                    <tr>
                        <td> {{ $dias }} </td>
                        <td>
                            <label class="custom-control custom-checkbox">
                            <input type="checkbox" checked>
                            <span class="custom-toggle-slider rounded-circle" id="customCheck1"></span>
                        </label>

                            {{-- Poner un width y height para que se vea mejor --}}
                            {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div> --}}
                            <div class="form-group m-3">
                                {{ Form::checkbox('dia', $dias, ['class' => 'form-control '. ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
                                <br>
                            </div>

                        </td>
                @endforeach
            </tbody>




            <div class="form-group">
                {{ Form::label('dia') }}
                {{ Form::text('dia', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
                {!! $errors->first('dia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('hora_inicio') }}
                {{ Form::time('hora_inicio', $horario->hora_inicio, ['class' => 'form-control' . ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
                {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('hora_fin') }}
                {{ Form::time('hora_fin', $horario->hora_fin, ['class' => 'form-control' . ($errors->has('hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
                {!! $errors->first('hora_fin', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('personal_id') }}
                {{ Form::text('personal_id', $horario->personal_id, ['class' => 'form-control' . ($errors->has('personal_id') ? ' is-invalid' : ''), 'placeholder' => 'Personal Id']) }}
                {!! $errors->first('personal_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            {{-- <div class="form-group">
            {{ Form::label('roles') }}
            {{ Form::select('roles', $rol, null, ['class' => 'form-control' . ($errors->has('roles') ? ' is-invalid' : ''), 'placeholder' => 'Roles']) }}
            {!! $errors->first('roles', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}


            {{-- {{ Form::label('dia_semana') }}
        {{ Form::checkbox('dia_semana', $horario->dia_semana, ['class' => 'form-control' . ($errors->has('dia_semana') ? ' is-invalid' : ''), 'placeholder' => 'Dia Semana']) }}
        {!! $errors->first('dia_semana', '<div class="invalid-feedback">:message</p>') !!} --}}

            {{-- {{ Form::label('dia') }} <br>
            {{ Form::checkbox('dia[]', 'Lunes', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Lunes <br>
            {{ Form::checkbox('dia[]', 'Martes', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Martes <br>
            {{ Form::checkbox('dia[]', 'Miercoles', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Miercoles <br>
            {{ Form::checkbox('dia[]', 'Jueves', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Jueves <br>
            {{ Form::checkbox('dia[]', 'Viernes', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Viernes <br>
            {{ Form::checkbox('dia[]', 'Sabado', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Sabado <br>
            {{ Form::checkbox('dia[]', 'Domingo', $horario->dia, ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia') }} Domingo <br>
            {!! $errors->first('dia', '<div class="invalid-feedback">:message</p>') !!} --}}



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
