@extends('layouts.app')

@section('template_title')
    Personal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="">
                                <span id="card_title">
                                    {{ __('Personal') }}
                                </span>

                            <div class="float-right">
                                <a href="{{ route('personal.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
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

                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Apellidos</th>
                                        <th>Dni</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Ciudad</th>
                                        <th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personals as $personal)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $personal->user()->first()->name }}</td>
                                            <td>{{ $personal->user()->first()->email }}</td>
                                            <td>{{ $personal->DNI }}</td>
                                            <td>{{ $personal->apellidos }}</td>
                                            <td>{{ $personal->direccion }}</td>
                                            <td>{{ $personal->telefono }}</td>
                                            <td>{{ $personal->ciudad }}</td>
                                            <td>{{ $personal->user_id }}</td>

                                            <td>
                                                <form action="{{ route('personal.destroy', $personal->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('personal.show', $personal->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('personal.edit', $personal->id) }}"><i
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
                {!! $personals->links() !!}
            </div>
        </div>
    </div>
@endsection