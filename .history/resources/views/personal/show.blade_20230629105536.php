@extends('layouts.app')

@section('template_title')
    {{-- {{ $personal->name ?? "{{ __('Show') Personal" }} --}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        //Mostrar los datos de name, DNI, apellidos, direccion, telefono, ciudad, user_id




                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $personal->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $personal->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $personal->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $personal->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $personal->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $personal->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
