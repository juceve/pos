@extends('adminlte::page')

@section('title', 'Editar Productos')

@section('content_header')
    <h2 class="h4">Productos::Editar</h2>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-primary">
                    <div class="card-header">
                        <span class="card-title">Editar Producto</span>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('productos.index') }}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('productos.update', $producto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('producto.form')
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-5"><i class="fas fa-save"></i>
                                    Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
