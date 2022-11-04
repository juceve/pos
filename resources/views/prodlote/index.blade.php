@extends('adminlte::page')

@section('title', 'Lotes de Productos')

@section('content_header')
<h2 class="h4">Productos::Lotes</h2>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Prodlote') }}
                        </span>

                        <div class="float-right">
                            <button class="btn btn-primary btn-sm float-right" data-placement="left" data-toggle="modal"
                                data-target="#modalCreate">
                                <i class="fas fa-plus"></i> Nuevo
                            </button>
                        </div>
                    </div>
                </div>
                {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif --}}

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>FEC. INGRESO</th>
                                    <th>PRODUCTO</th>
                                    <th>PROVEEDOR</th>
                                    <th>NRO MOVIMIENTO</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prodlotes as $prodlote)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $prodlote->fecha }}</td>
                                    <td>{{ $prodlote->producto->nombre }}</td>
                                    <td>{{ $prodlote->proveedore->nombre }}</td>
                                    <td>{{ $prodlote->movimiento_id }}</td>

                                    <td>
                                        <form class="deleted" action="{{ route('prodlotes.destroy',$prodlote->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('prodlotes.show',$prodlote->id) }}" title="Ver"><i
                                                    class="fa fa-fw fa-eye" ></i></a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('prodlotes.edit',$prodlote->id) }}" title="Editar"><i
                                                    class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $prodlotes->links() !!}
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateLabel">Nuevo Lote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-sm">
                <form method="POST" action="{{ route('prodlotes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Fecha de Ingreso</label>
                                <input type="date" id="fecha" name="fecha" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Producto</label>
                                <select name="producto_id" id="producto_id" class="Select2" style="width: 100%" required>
                                    <option value="">Seleccione un producto</option>
                                    @if ($productos->count()>0)
                                    @foreach ($productos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Concepto</label>
                        <input type="text" class="form-control form-control-sm" name="concepto" id="concepto"
                            placeholder="Concepto de la operación" required>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Cant. Producto</label>
                                <input type="number" id="cantProducto" name="cantProducto"
                                    class="form-control form-control-sm" placeholder="0" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Vencimiento</label>
                                <input type="date" id="vencimiento" name="vencimiento"
                                    class="form-control form-control-sm" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-secondary px-5" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary px-5"><i class="fas fa-save"></i>
                            Registrar</button>
                    </div>


                </form>

            </div>


        </div>
    </div>
</div>
@endsection
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
    $(document).ready(function (e) {
        $('.Select2').select2({
        dropdownParent: $('#modalCreate .modal-body')
    });
    
    fechaactual();         
    });

   $('.Select2').on('change', function() {
        setTimeout(() => {
            var val = $(this).val();
            var name = $('#producto_id option:selected').text();
        $('#concepto').val('Ingreso de stock PROD:'+name+'  ID: '+val);
        }, 10);
    });

    function fechaactual(){
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
        $("#fecha").val(today);
    }
  
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
</script>
@endsection