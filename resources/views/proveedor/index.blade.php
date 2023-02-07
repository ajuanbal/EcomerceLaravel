@extends('layouts.app-admin')

@section('template_title')
    Proveedor
@endsection

@section('content')
    @include('partials.fun-admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('PROVEEDORES') }}
                            </h4>

                            <div class="float-right">
                                <a href="{{ route('proveedors.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('CREAR NUEVO') }}
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

                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Ruc</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedors as $proveedor)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $proveedor->name }}</td>
                                            <td>{{ $proveedor->phone }}</td>
                                            <td>{{ $proveedor->email }}</td>
                                            <td>{{ $proveedor->ruc }}</td>
                                            <td>
                                                @if ($proveedor->state == 0)
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{ route('proveedors.destroy', $proveedor->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('proveedors.show', $proveedor->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('proveedors.edit', $proveedor->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedors->links() !!}
            </div>
        </div>
    </div>
@endsection
