<div class="box box-info padding-1">
    <div class="box-body">
        {{ $dd->user()->first()->name }}
        {{ Form::hidden('personal_id', $dd->id) }}

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
                                <input class="form-check-input" type="checkbox" role="switch" id="estado_{{$dia}}"
                                    name="estado_{{$dia}}">
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="hora_inicio[]" id="hora_inicio_{{$dia}}">
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
                                    <select class="form-control" name="hora_fin[]" id="hora_fin_{{$dia}}">
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
                    $('#'
                } else {
                    $("select[name='hora_inicio[]']").val('');
                    $("select[name='hora_fin[]']").val('');
                }
            });
        });
    </script>
</div>
