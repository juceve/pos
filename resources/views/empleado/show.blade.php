@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $empleado->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $empleado->fechanacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Naturalpersona Id:</strong>
                            {{ $empleado->naturalpersona_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $empleado->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cargoempleado Id:</strong>
                            {{ $empleado->cargoempleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $empleado->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
