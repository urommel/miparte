@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Horario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $dd->id }}</h1>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Horario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('horario.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('horario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
