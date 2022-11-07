@extends('adminlte::page')

@section('title', 'Lote de Producto')

@section('content_header')
<h2 class="h4">Productos::Lote</h2>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <div class="float-left">
                        <strong>ID LOTE:</strong>
                        {{ $prodlote->id }}
                        ||
                        <strong>Fecha:</strong>
                        {{ $prodlote->fecha }}
                    </div>
                    <div class="float-right">
                        <a class="btn btn-info btn-sm" href="{{ route('prodlotes.index') }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Producto:</strong>
                                {{ $prodlote->producto->nombre }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Proveedor:</strong>
                                {{ $prodlote->producto->proveedore->nombre }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Cantidad:</strong>
                                {{ $prodlote->cantProducto }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Fec. Vencimiento:</strong>
                                {{ $prodlote->vencimiento }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Nro. Movimiento:</strong>
                                {{ $prodlote->movimiento_id }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Concepto:</strong>
                                {{ $prodlote->movimiento->concepto }}
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>
</section>
@endsection