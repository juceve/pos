@extends('adminlte::page')

@section('title', 'Nuevo Movimiento')

@section('content_header')
    <h2 class="h4">Nuevo Movimiento</h2>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-success">
                    <div class="card-header">
                        <span class="card-title">Formulario de Registro</span>
                        <div class="float-right">
                            <a class="btn btn-success btn-sm" href="{{ route('movimientos.index') }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('movimientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('movimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
