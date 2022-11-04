@extends('adminlte::page')

@section('title', 'Listado Productos')

@section('content_header')
    <h2 class="h4">Productos::Listado</h2>
@stop


@livewireStyles
@section('content')
    <div class="container-fluid" style="overflow: hidden;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Productos registrados') }}
                            </span>

                            <div class="float-right">
                                <button class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                    data-target="#modalCreate" data-placement="left" data-backdrop="static" data-keyboard="false">
                                    <i class="fas fa-plus"></i> {{ __('Nuevo') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @livewire('producto.tabla')
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- MODALES --}}
    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                    
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('productos.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('producto.form')
                        <hr>
                        <div class="box-footer mt-3 float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                style="width: 8rem" onclick="reset()">Cancelar</button>
                            <button type="submit" class="btn btn-primary" style="width: 8rem"><i class="fas fa-save"></i>
                                Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- FIN MODALES --}}
@endsection
@livewireScripts
@section('js')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire(
                'Excelente',
                '{{ $message }}',
                'success'
            )
        </script>
    @endif
    <script>
        $('.deleted').submit(function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Eliminar Registro!',
                text: "Esta seguro de realizar la operación?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, elimínalo!',
                cancelButtonText: 'No, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Operación cancelada',
                        'No se modificó ningún registro',
                        'error'
                    )
                }
            })
        });
function reset(){
    $('#codigo').val('');
    $('#nombre').val('');
    $('#precioVenta').val('');
    $('#minimoStock').val('');
    $('#activo').val('true');
    $('#categoriaProducto_id').val('true');
}
        
    </script>
@endsection
