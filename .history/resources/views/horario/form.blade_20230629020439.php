<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            // checkbox para dias con laravel collective
            
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
