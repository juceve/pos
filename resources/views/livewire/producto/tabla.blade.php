<div>
    <div class="table-responsive container-fluid">
        <table class="table table-hover  ">
            <form class="form-horizontal">
                <div class="form-group row">
                    <div class="col-md-2 text-md-right col-xl-1 text-lg-left">
                        <label for="form-label"></label>
                        Ordenar
                    </div>
                    <div class="col-3 col-sm-2  col-md-2 col-lg-2 col-xl-1">
                        <select class="form-control form-control-sm" wire:model="paginate" style="width: 100%">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                    <div class="col-2 col-xl-5"></div>
                    <label class="col-md-2 col-xl-1 form-label text-lg-right">Buscar:</label>
                    <div class="col-md-4 ">
                        <input type="search" class="form-control form-control-sm"
                            placeholder="Buscar por nombre o codigo" wire:model="search" style="width: 100%">
                    </div>


                </div>
            </form>
            <thead class="thead">
                <tr class="table-secondary">
                    <th style="cursor: pointer;" wire:click="order('id')">
                        ID
                        {{-- Sorts --}}
                        @if ($sort == 'id')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>

                    <th style="cursor: pointer;" wire:click="order('codigo')">
                        Codigo
                        {{-- Sorts --}}
                        @if ($sort == 'codigo')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif

                    </th>
                    <th style="cursor: pointer;" wire:click="order('nombre')">
                        Nombre
                        {{-- Sorts --}}
                        @if ($sort == 'nombre')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>

                    <th style="cursor: pointer;" wire:click="order('categoriaProducto_id')">
                        Categoria
                        {{-- Sorts --}}
                        @if ($sort == 'categoriaProducto_id')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th style="cursor: pointer;" wire:click="order('activo')">
                        Estado
                        {{-- Sorts --}}
                        @if ($sort == 'activo')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th style="width: 150px"></th>
                </tr>
            </thead>
            <tbody>
                @if ($productos->count() > 0)
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->codigo }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->categoriaProducto->nombre }}</td>
                            @php
                                $estado = '';
                                if ($producto->activo) {
                                    $estado = 'ACTIVO';
                                } else {
                                    $estado = 'INACTIVO';
                                }
                            @endphp
                            <td>{{ $estado }}</td>
                            <td>
                                <form class="deleted" action="{{ route('productos.destroy', $producto->id) }}"
                                    method="POST">
                                    <a class="btn btn-sm btn-primary "
                                        href="{{ route('productos.show', $producto->id) }}" title="Ver"><i
                                            class="fa fa-fw fa-eye "></i></a>
                                    <a class="btn btn-sm btn-success"
                                        href="{{ route('productos.edit', $producto->id) }}" title="Editar"><i
                                            class="fa fa-fw fa-edit "></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i
                                            class="fa fa-fw fa-trash "></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">
                            <span>No se encontraron registros.</span>
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
        <div class="float-right">
            {{ $productos->links() }}
        </div>
    </div>
</div>
