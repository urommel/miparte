@extends('layouts.app')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div> --}}
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horario.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <h1>Horario asignado</h1>

                        <h2>Personal: {{ $personal->d }}</h2>

                        <table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th>Trabaja</th>
                                    <th>Hora inicio</th>
                                    <th>Hora fin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($horarios as $horario)
                                    <tr>
                                        <td>{{ $horario->dia }}</td>
                                        <td>{{ $horario->trabaja ? 'Sí' : 'No' }}</td>
                                        <td>{{ $horario->hora_inicio }}</td>
                                        <td>{{ $horario->hora_fin }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
