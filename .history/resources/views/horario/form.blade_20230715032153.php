<style>
    .checkbox-container {
        position: relative;
        display: inline-block;
    }

    .checkbox-container input[type="checkbox"] {
        display: none;
    }

    .checkbox-container label {
        position: absolute;
        top: 0;
        left: 0;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #ccc;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .checkbox-container input[type="checkbox"]:checked+label {
        background-color: #2196F3;
    }

    .checkbox-container label:after {
        content: "";
        position: absolute;
        top: 6px;
        left: 6px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #fff;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .checkbox-container input[type="checkbox"]:checked+label:after {
        opacity: 1;
    }

    .checkbox-container input[type="checkbox"]:disabled+label {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .checkbox-container input[type="checkbox"]:disabled+label:after {
        background-color: #ccc;
    }
</style>



<div class="box box-info padding-1">
    <div class="box-body">
        <div class="m-3">
            <p class="fs-5">Asignar horario al <Label class="fw-bold">
                    {{-- {{ $dd->user()->first()->roles()->first()->name }} --}}
                </Label>
                {{-- - {{ $dd->user()->first()->name }} {{ $dd->apellidos }} --}}
            </p>

            {{-- {{ Form::hidden('personal_id', $dd->id) }} --}}
        </div>
        {{-- <table class="table align-items-center table-flush">
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
        </table> --}}

        {{-- <table class="table align-items-center table-flush">
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Trabaja</th>
                    <th>Hora de inicio</th>
                    <th>Hora de finalización</th>
                </tr>
            </thead>
            <tbody>
                @foreach (['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'] as $dia)
                    <tr>
                        <td>{{ $dia }}</td>
                        <td>
                            <input type="checkbox" name="horarios[{{ strtolower($dia) }}][trabaja]" value="1"
                                @if (isset($personal->horario) && $personal->horario->horarios[strtolower($dia)]['trabaja']) checked @endif>
                        </td>
                        <td>
                            <input type="time" name="horarios[{{ strtolower($dia) }}][hora_inicio]"
                                value="{{ isset($personal->horario) ? $personal->horario->horarios[strtolower($dia)]['hora_inicio'] : '' }}">
                        </td>
                        <td>
                            <input type="time" name="horarios[{{ strtolower($dia) }}][hora_fin]"
                                value="{{ isset($personal->horario) ? $personal->horario->horarios[strtolower($dia)]['hora_fin'] : '' }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}

        <table>
        <thead>
            <tr>
                <th>Día</th>
                <th>Trabaja</th>
                <th>Hora de inicio</th>
                <th>Hora de finalización</th>
            </tr>
        </thead>
        <tbody>
            @foreach (['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'] as $dia)
                <tr>
                    <td>{{ $dia }}</td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="horarios[{{ strtolower($dia) }}][trabaja]" value="1" id="checkbox-{{ strtolower($dia) }}" class="trabaja-checkbox">
                            <label for="checkbox-{{ strtolower($dia) }}"></label>
                        </div>
                    </td>
                    <td>
                        <input type="time" name="horarios[{{ strtolower($dia) }}][hora_inicio]" class="form-control hora-inicio" disabled>
                    </td>
                    <td>
                        <input type="time" name="horarios[{{ strtolower($dia) }}][hora_fin]" class="form-control hora-fin" disabled>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>





    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>

    {{-- <script>
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
    </script> --}}

    <script>
        function toggleHorarios(checkbox) {
            var row = checkbox.parentNode.parentNode;
            var horaInicioInput = row.querySelector('.hora-inicio');
            var horaFinInput = row.querySelector('.hora-fin');

            if (checkbox.checked) {
                horaInicioInput.removeAttribute('disabled');
                horaFinInput.removeAttribute('disabled');
            } else {
                horaInicioInput.setAttribute('disabled', 'disabled');
                horaFinInput.setAttribute('disabled', 'disabled');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.trabaja-checkbox');
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const label = this.parentNode.querySelector('label');
                    if (this.checked) {
                        label.classList.add('checked');
                    } else {
                        label.classList.remove('checked');
                    }
                });
            });
        });
    </script>
</div>
