@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Personal
    <h3 class="font-bold m-3">Personal</h3>
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Personal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personal.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('personal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
