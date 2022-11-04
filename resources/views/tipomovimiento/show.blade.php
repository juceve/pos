@extends('layouts.app')

@section('template_title')
    {{ $tipomovimiento->name ?? 'Show Tipomovimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipomovimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipomovimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipomovimiento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $tipomovimiento->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
