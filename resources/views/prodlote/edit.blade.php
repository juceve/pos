@extends('adminlte::page')

@section('title', 'Editar Lote')

@section('content_header')
<h2 class="h4">Productos::Editar Lote</h2>
@stop

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-info">
                <div class="card-header">
                    <span class="card-title">Editar Lote</span>
                    <div class="float-right">
                        <a class="btn btn-info btn-sm" href="{{ route('prodlotes.index') }}"><i
                                class="fas fa-arrow-circle-left"></i> Volver</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('prodlotes.update', $prodlote->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('prodlote.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>

    $('.Select2').select2();
    $('.Select2').on('change', function() {
        setTimeout(() => {
            var val = $(this).val();
            var name = $('#producto_id option:selected').text();
        $('#concepto').val('Ingreso de stock PROD: '+name+' - ID: '+val);
        }, 10);
    });
</script>
@endsection