@extends('adminlte::page')

@section('title', 'Info Productos')

@section('content_header')
    <h2 class="h4">Productos::Info</h2>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos del Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('productos.index') }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $producto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $producto->precioVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Mínimo Stock:</strong>
                            {{ $producto->minimoStock }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $producto->activo }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categoriaProducto->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
