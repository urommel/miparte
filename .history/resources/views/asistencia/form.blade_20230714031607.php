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
                                    <td>{{ $personals->name }}</td>
                                    <td>
                                        <div class="custom-control custom-radio custom-control-inline">
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
                                        </div>
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
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="justificacion">
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
