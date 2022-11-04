@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
<h2 class="h4">Productos::Editar</h2>
@stop

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Editar Producto</span>
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

</script>
@endsection