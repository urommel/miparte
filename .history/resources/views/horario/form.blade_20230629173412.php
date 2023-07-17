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
                @foreach ($dias as $dias)
                    <tr>
                        <th> {{ $dias }} </th>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control" name="h">
                                        @for ($i = 7; $i <= 12; $i++)
                                            <option value="">
                                                {{ $i }}:00 AM
                                            </option>
                                            <option value="">
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
                                    <select class="form-control">
                                        @for ($i = 1; $i <= 6; $i++)
                                            <option value="">
                                                {{ $i }}:00 PM
                                            </option>
                                            <option value="">
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
</div>
