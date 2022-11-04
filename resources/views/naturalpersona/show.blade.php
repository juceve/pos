@extends('layouts.app')

@section('template_title')
    {{ $naturalpersona->name ?? 'Show Naturalpersona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Naturalpersona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('naturalpersonas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $naturalpersona->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $naturalpersona->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Completo:</strong>
                            {{ $naturalpersona->nombre_completo }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $naturalpersona->domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $naturalpersona->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $naturalpersona->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
