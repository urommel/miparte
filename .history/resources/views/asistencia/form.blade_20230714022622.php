<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="table-responsive-sm">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Personal</th>
                            <th scope="col">Asistencia </th>
                            <th scope="col">Justificacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row"></td>
                            <td>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        {{-- name="asistio[{{ $item->idAsistencia }}]"  --}}
                                        id="inlineRadio1" value="si"
                                        {{-- {{ $item->asistio === 'si' ? 'checked' : '' }} --}}
                                        >
                                    <label class="form-check-label" for="inlineRadio1">si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        name="asistio[{{ $item->idAsistencia }}]" 
                                        id="inlineRadio2" value="no"
                                        {{-- {{ $item->asistio === 'no' ? 'checked' : '' }} --}}
                                        >
                                    <label class="form-check-label" for="inlineRadio2">no</label>
                                </div>
                            </td>
                            <td>


                                <input type="text" name="justificante[{{ $item->idAsistencia }}]"
                                    value="{{ $item->justificacion }}"
                                    class="form-control {{ $errors->has('asistio') ? ' is-invalid' : '' }}  ">

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>






            <div class="form-group col-md-6">
                <label for="">Marcar Asistencia</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Si</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1"
                        class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">No</label>
                </div>
                {{-- {{ Form::label('DNI') }}
                {{ Form::text('DNI', $personal->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">

                <label>Justificacion</label>
                <textarea class="form-control"></textarea>


                {{-- {{ Form::label('Rol') }}
                {{ Form::select('roles', $rol, null, ['class' => 'form-control' . ($errors->has('roles') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
                {!! $errors->first('roles', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">
                {{-- {{ Form::label('Apellidos') }}
                {{ Form::text('apellidos', $personal->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
                {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">
                {{-- {{ Form::label('Nombres') }}
                {{ Form::text('name', $personal->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">
                {{-- {{ Form::label('Direccion') }}
                {{ Form::text('direccion', $personal->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">
                {{-- {{ Form::label('Ciudad') }}
                {{ Form::text('ciudad', $personal->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
                {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">
                {{-- {{ Form::label('Celular') }}
                {{ Form::text('telefono', $personal->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>

            <div class="form-group col-md-6">
                {{-- {{ Form::label('Correo') }}
                {{ Form::text('email', $personal->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            {{-- <div class="form-group">
                {{ Form::label('password') }}
                {{ Form::text('password', $personal->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
                {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
            </div> --}}

            {{-- Hacer un Password Input con laravel colletive --}}
            <div class="form-group col-md-6">
                {{-- {{ Form::label('Contraseña') }}
                {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>


            {{-- <div class="form-group">
                {{ Form::label('user_id') }}
                {{ Form::text('user_id', $personal->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
                {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
            </div> --}}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
