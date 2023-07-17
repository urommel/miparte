@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? "{{ __('Show') Horario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horario.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $horario->dia }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $horario->hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $horario->hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Personal Id:</strong>
                            {{ $horario->personal_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
