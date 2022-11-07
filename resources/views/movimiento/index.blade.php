@extends('adminlte::page')

@section('title', 'Movimientos')

@section('content_header')
    <h2 class="h4">Movimientos</h2>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                LISTADO DE MOVIMIENTOS
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movimientos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  <i class="fas fa-plus"></i> Nuevo
                                </a>
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
                            <table class="table datatable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>FECHA</th>
										<th>TIPO</th>
										<th>REGISTRADO POR</th>
                                        <th width="140px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movimientos as $movimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movimiento->fecha }}</td>
											<td>{{ $movimiento->tipomovimiento->nombre }}</td>
											<td>{{ $movimiento->user->name }}</td>

                                            <td class="text-right">
                                                <form action="{{ route('movimientos.destroy',$movimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movimientos.show',$movimiento->id) }}" title="Ver"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movimientos.edit',$movimiento->id) }}" title="Editar"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
        $(document).ready(function () {
            $('.datatable').DataTable({
            "order": [[0, 'desc']],
            "language": {
            "url": "{{asset('js/es.json')}}"
        },
        });
        });
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