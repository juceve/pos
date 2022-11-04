@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $cliente->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Tipocliente:</strong>
                            {{ $cliente->tipocliente }}
                        </div>
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $cliente->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $cliente->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
