<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-6">
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Si
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            Radio 2
                        </label>
                    </div>
                </div>
                {{-- {{ Form::label('DNI') }}
                {{ Form::text('DNI', $personal->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!} --}}
            </div>
            <div class="form-group col-md-6">
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
