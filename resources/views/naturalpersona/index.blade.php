@extends('layouts.app')

@section('template_title')
    Naturalpersona
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Naturalpersona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('naturalpersonas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Nombre Completo</th>
										<th>Domicilio</th>
										<th>Telefono</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($naturalpersonas as $naturalpersona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $naturalpersona->nombres }}</td>
											<td>{{ $naturalpersona->apellidos }}</td>
											<td>{{ $naturalpersona->nombre_completo }}</td>
											<td>{{ $naturalpersona->domicilio }}</td>
											<td>{{ $naturalpersona->telefono }}</td>
											<td>{{ $naturalpersona->email }}</td>

                                            <td>
                                                <form action="{{ route('naturalpersonas.destroy',$naturalpersona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('naturalpersonas.show',$naturalpersona->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('naturalpersonas.edit',$naturalpersona->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $naturalpersonas->links() !!}
            </div>
        </div>
    </div>
@endsection
