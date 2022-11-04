@extends('layouts.app')

@section('template_title')
    {{ $movimiento->name ?? 'Show Movimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $movimiento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $movimiento->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipomovimiento Id:</strong>
                            {{ $movimiento->tipomovimiento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $movimiento->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedore Id:</strong>
                            {{ $movimiento->proveedore_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $movimiento->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
