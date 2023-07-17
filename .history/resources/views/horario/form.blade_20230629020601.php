<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            // checkbox para dias con laravel collective
            {{ Form::label('dia') }}
            <br>
            {{ Form::checkbox('dia', 'Lunes', $horario->dia == 'Lunes' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Lunes') }}
            <br>
            {{ Form::checkbox('dia', 'Martes', $horario->dia == 'Martes' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Martes') }}
            <br>
            {{ Form::checkbox('dia', 'Miércoles', $horario->dia == 'Miércoles' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Miércoles') }}
            <br>
            {{ Form::checkbox('dia', 'Jueves', $horario->dia == 'Jueves' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Jueves') }}
            <br>
            {{ Form::checkbox('dia', 'Viernes', $horario->dia == 'Viernes' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Viernes') }}
            <br>
            {{ Form::checkbox('dia', 'Sábado', $horario->dia == 'Sábado' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Sábado') }}
            <br>
            {{ Form::checkbox('dia', 'Domingo', $horario->dia == 'Domingo' ? 'checked' : '', ['class' => 'form-control' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
            {{ Form::label('dia', 'Domingo') }}
            {!! $errors->first('dia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        

            //Para horas con laravel collective
            <div class="form-group">
                {{ Form::label('hora_inicio') }}
                {{ Form::time('hora_inicio', $horario->hora_inicio, ['class' => 'form-control' . ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
                {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('hora_fin') }}
                {{ Form::time('hora_fin', $horario->hora_fin, ['class' => 'form-control' . ($errors->has('hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
                {!! $errors->first('hora_fin', '<div class="invalid-feedback">:message</p>') !!}
            </div>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
