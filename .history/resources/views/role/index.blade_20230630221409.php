@extends('layouts.app')

@section('template_title')
    Role
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        {{-- <h3 class="page__heading">Roles</h3> --}}
        <h3 class="font-bold m-3">Roles</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                    @can('crear-rol')
                    <a class="btn btn-light" href="{{ route('role.create') }}">Nuevo</a>
                    @endcan


                        <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef">
                                <th style="color:#fff;">Rol</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @can('editar-rol')
                                        <a class="btn btn-primary" href="{{ route('role.edit',$role->id) }}">Editar</a>
                                    @endcan

                                    @can('borrar-rol')
                                        {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Centramos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $roles->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
