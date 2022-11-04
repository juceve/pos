@extends('layouts.app')

@section('template_title')
    {{ $prodlote->name ?? 'Show Prodlote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prodlote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prodlotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $prodlote->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Movimiento Id:</strong>
                            {{ $prodlote->movimiento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantproducto:</strong>
                            {{ $prodlote->cantProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimiento:</strong>
                            {{ $prodlote->vencimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
