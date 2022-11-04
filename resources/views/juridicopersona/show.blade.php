@extends('layouts.app')

@section('template_title')
    {{ $juridicopersona->name ?? 'Show Juridicopersona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Juridicopersona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('juridicopersonas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $juridicopersona->razonsocial }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $juridicopersona->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $juridicopersona->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $juridicopersona->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
