<div class="box box-info padding-1">
    <div class="box-body">

        <tr>
            <th scope = "col">

            </th>
        </tr>

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
        <div class="form-group">
            {{ Form::label('roles') }}
            {{ Form::select('roles', $rol, null, ['class' => 'form-control' . ($errors->has('roles') ? ' is-invalid' : ''), 'placeholder' => 'Roles']) }}
            {!! $errors->first('roles', '<div class="invalid-feedback">:message</div>') !!}
        </div>


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
