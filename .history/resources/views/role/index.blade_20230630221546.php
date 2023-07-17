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
                    <a class="btn btn-info" href="{{ route('role.create') }}">Nuevo</a>
                    @endcan


                        <table class="table table-striped mt-2">
                            
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
