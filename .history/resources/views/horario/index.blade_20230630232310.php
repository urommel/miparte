@extends('layouts.app')

@section('template_title')
    Horario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            {{-- <span id="card_title">
                                {{ __('Horarios') }}
                            </span> --}}
                            <h3 class="font-bold m-3">Horarios</h3>

                            {{-- <div class="float-right text-right">
                                <a href="{{ route('horario.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>


                                        <th>Dni</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th>Acciones</th>

                                        {{-- <th>Dia</th>
                                        <th>Hora Inicio</th>
                                        <th>Hora Fin</th>
                                        <th>Personal Id</th> --}}

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $horario->personal->DNI }}</td>
                                            <td>{{ $horario->personal->apellidos }}</td>
                                            {{-- traer name que esta en user --}}
                                            <td>{{ $horario->personal->name }}</td>


                                            {{-- <td>{{ $horario->dia }}</td>
                                            <td>{{ $horario->hora_inicio }}</td>
                                            <td>{{ $horario->hora_fin }}</td>
                                            <td>{{ $horario->personal_id }}</td> --}}

                                            <td>
                                                <form action="{{ route('horario.destroy', $horario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('horario.show', $horario->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('horario.edit', $horario->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $horarios->links() !!}
            </div>
        </div>
    </div>
@endsection