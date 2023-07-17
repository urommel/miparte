<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>Personal</th>
                                    <th>Asistencia</th>
                                    <th>Justificacion</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>{{ $personals->first()->user->name }}
                                        <input type="hidden" name="personal_id" value="{{ $personals->first()->id }}">
                                    </td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline3" name="estado" class="custom-control-input" value="tardanza" onclick="mostrarCampoTardanza()">
                                            <label class="custom-control-label" for="customRadioInline3">Tardanza</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="estado" class="custom-control-input" value="asistio">
                                            <label class="custom-control-label" for="customRadioInline1">Asistió</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="estado" class="custom-control-input" value="no_asistio">
                                            <label class="custom-control-label" for="customRadioInline2">No asistió</label>
                                        </div>

                                        <div id="campoTardanza" style="display: none;">
                                            <label for="minutos">Minutos de tardanza:</label>
                                            <input type="number" class="form-control" name="minutos" id="minutosInput">
                                        </div>

                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="justificacion"
                                            id="justificacionInput">
                                    </td>
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function habilitarJustificacion(deshabilitar) {
            var justificacionInput = document.getElementById("justificacionInput");
            justificacionInput.disabled = deshabilitar;
            justificacionInput.value = ""; // Opcional: reinicia el valor de justificación al deshabilitar

            var minutosTardanzaDiv = document.getElementById("minutosTardanza");
            if (deshabilitar) {
                minutosTardanzaDiv.style.display = "block";
            } else {
                minutosTardanzaDiv.style.display = "none";
            }
        }
                                            <input type="radio" id="customRadioInline1"
                                            name="asistencia"
                                                class="custom-control-input"
                                                value="si"
                                                >
                                            <label class="custom-control-label" for="customRadioInline1">Si</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2"
                                            name="asistencia"
                                                class="custom-control-input"
                                                value="no">
                                            <label class="custom-control-label" for="customRadioInline2">No</label>
                                        </div> --}}




    {{-- <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        name="asistio[{{ $item->idAsistencia }}]"
                                        id="inlineRadio1" value="si"
                                        {{ $item->asistio === 'si' ? 'checked' : '' }}
                                        >
                                    <label class="form-check-label" for="inlineRadio1">si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        name="asistio[{{ $item->idAsistencia }}]"
                                        id="inlineRadio2" value="no"
                                        {{ $item->asistio === 'no' ? 'checked' : '' }}
                                        >
                                    <label class="form-check-label" for="inlineRadio2">no</label>
                                </div> --}}
