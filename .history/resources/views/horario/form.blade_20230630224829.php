<div class="box box-info padding-1">
    <div class="box-body">
        <div class="m-3">
            <h5> Asignar Horario a {{ $dd->user()->first()->name }} - {{ $dd->user()->first()->roles()->first()->name }} </h5>
            {{-- Cololar el nombre del rol --}}

            {{ Form::hidden('personal_id', $dd->id) }}
        </div>
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
                @foreach ($dias as $dia)
                    <tr>
                        <th> {{ $dia }} </th>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="estado_{{ $dia }}" name="estado_{{ $dia }}">
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="hora_inicio_{{ $dia }}"
                                        id="hora_inicio_{{ $dia }}" disabled>
                                        @for ($i = 7; $i <= 12; $i++)
                                            <option value="{{ $i }}:00 AM">
                                                {{ $i }}:00 AM
                                            </option>
                                            <option value="{{ $i }}:30 AM">
                                                {{ $i }}:30 AM
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="hora_fin_{{ $dia }}"
                                        id="hora_fin_{{ $dia }}" disabled>
                                        @for ($i = 1; $i <= 6; $i++)
                                            <option value="{{ $i }}:00 PM">
                                                {{ $i }}:00 PM
                                            </option>
                                            <option value="{{ $i }}:30 PM">
                                                {{ $i }}:30 PM
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>

    <script>
        $(document).ready(function() {
            $('#estado_Lunes').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Lunes').prop('disabled', false);
                    $('#hora_fin_Lunes').prop('disabled', false);
                } else {
                    $('#hora_inicio_Lunes').prop('disabled', true);
                    $('#hora_fin_Lunes').prop('disabled', true);
                }
            });
            $('#estado_Martes').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Martes').prop('disabled', false);
                    $('#hora_fin_Martes').prop('disabled', false);
                } else {
                    $('#hora_inicio_Martes').prop('disabled', true);
                    $('#hora_fin_Martes').prop('disabled', true);
                }
            });
            $('#estado_Miercoles').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Miercoles').prop('disabled', false);
                    $('#hora_fin_Miercoles').prop('disabled', false);
                } else {
                    $('#hora_inicio_Miercoles').prop('disabled', true);
                    $('#hora_fin_Miercoles').prop('disabled', true);
                }
            });
            $('#estado_Jueves').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Jueves').prop('disabled', false);
                    $('#hora_fin_Jueves').prop('disabled', false);
                } else {
                    $('#hora_inicio_Jueves').prop('disabled', true);
                    $('#hora_fin_Jueves').prop('disabled', true);
                }
            });
            $('#estado_Viernes').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Viernes').prop('disabled', false);
                    $('#hora_fin_Viernes').prop('disabled', false);
                } else {
                    $('#hora_inicio_Viernes').prop('disabled', true);
                    $('#hora_fin_Viernes').prop('disabled', true);
                }
            });
            $('#estado_Sabado').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Sabado').prop('disabled', false);
                    $('#hora_fin_Sabado').prop('disabled', false);
                } else {
                    $('#hora_inicio_Sabado').prop('disabled', true);
                    $('#hora_fin_Sabado').prop('disabled', true);
                }
            });
            $('#estado_Domingo').change(function() {
                if ($(this).is(':checked')) {
                    $('#hora_inicio_Domingo').prop('disabled', false);
                    $('#hora_fin_Domingo').prop('disabled', false);
                } else {
                    $('#hora_inicio_Domingo').prop('disabled', true);
                    $('#hora_fin_Domingo').prop('disabled', true);
                }
            });
        });
    </script>
</div>
