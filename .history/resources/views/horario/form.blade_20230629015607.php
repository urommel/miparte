<div class="box box-info padding-1">
    <div class="box-body">

        //Checkbox para seleccionar el dia de la semana
        <div class="form-group">
            {{ Form::label('dia') }}
            <div class="form-check">
                {{ Form::checkbox('dia', 'Lunes', $horario->dia == 'Lunes' ? true : false, array('class' => 'form-check-input')) }}
                {{ Form::label('Lunes', 'Lunes', array('class' => 'form-check-label')) }}
            </div>
            <div class="form-check">
                {{ Form::checkbox('dia', 'Martes', $horario->dia == 'Martes' ? true : false, array('class' => 'form-check-input')) }}
                {{ Form::label('Martes', 'Martes', array('class' => 'form-check-label')) }}
            </div>
            <div class="form-check">
                {{ Form::checkbox('dia', 'Miercoles', $horario->dia == 'Miercoles' ? true : false, array('class' => 'form-check-input')) }}
                {{ Form::label('Miercoles', 'Miercoles', array('class' => 'form-check-label')) }}
            </div>
            <div class="form-check">
                {{ Form::checkbox('dia', 'Jueves', $horario->dia == 'Jueves' ? true : false, array('class' => 'form-check-input')) }}
                {{ Form::label('Jueves', 'Jueves', array('class' => 'form-check-label')) }}
            </div>
            <div class="form-check">
                {{ Form::checkbox('dia', 'Viernes', $horario->dia == 'Viernes' ? true : false, array('class' => 'form-check-input')) }}
                {{ Form::label('Viernes', 'Viernes', array('class' => 'form-check-label')) }}
            </div>
            <div class="form-check">
                {{ Form::checkbox('dia', 'Sabado', $horario->dia == 'Sabado' ? true : false, array('class' => 'form-check-input')) }}
                {{ Form::label('Sabado', 'Sabado', array('class' => 'form-check-label')) }}
            </div>
            <div class="form-check">
                {{ Form::checkbox('dia', 'Domingo', $horario->dia == 'Doming

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
