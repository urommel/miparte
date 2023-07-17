<div class="box box-info padding-1">
    <div class="box-body">
        {{ $dd->user()->first()->name}}
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
                            {{-- <label class="custom-control custom-checkbox">
                                <input type="checkbox" checked>
                                <span class="custom-toggle-slider rounded-circle" style="height: 20px;width: 20px"></span>
                            </label> --}}

                            {{-- Poner un width y height para que se vea mejor --}}
                            {{-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div> --}}
                            {{-- <div class="form-group m-3 form-switch">
                                {{ Form::checkbox('dia', $dias, ['class' => 'form-control form-check-input' . ($errors->has('dia') ? ' is-invalid' : ''), 'placeholder' => 'Dia']) }}
                                <br>
                            </div> --}}

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control">
                                        @for ($i=7; $i<=12; $i++)
                                            <option value="">
                                                {{$i}}:00 AM
                                            </option>
                                            <option value="">
                                                {{$i}}:30 AM
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
                                        @for ($i=1; $i<=6; $i++)
                                            <option value="">
                                                {{$i}}:00 PM
                                            </option>
                                            <option value="">
                                                {{$i}}:30 PM
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </td>

                @endforeach
            </tbody>








    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
