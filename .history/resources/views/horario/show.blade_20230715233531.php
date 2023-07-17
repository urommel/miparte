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

                        <table>
                            <thead>
                                <tr>
                                    <th>Personal</th>
                                    <th>Día</th>
                                    <th>Hora</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($horarios as $horario)
                                    <tr>
                                        <td>{{ $horario->personal->nombre }}</td>
                                        <td>{{ $horario->dia }}</td>
                                        <td>{{ $horario->hora_inicio }} - {{ $horario->hora_fin }}</td>
                                        <td>
                                            <a href="{{ route('horarios.edit', $horario->id) }}">Editar</a>
                                            <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- <h2>Personal: {{ $personal->user->name }}</h2>

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
                        </table> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
