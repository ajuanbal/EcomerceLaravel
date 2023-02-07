@extends('layouts.app-admin')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
@endsection

@section('content')
@include('partials.fun-admin')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <div class="float-right">
                                <a class="btn btn-light" href="{{ route('categorias.index') }}"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                            </div>
                            <h4 class="card-title">Ver Categoria</h4>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoria->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $categoria->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            @if ( $categoria->state==0 )
                                Activo
                            @else
                                Inactivo
                            @endif

                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $proveedores[0]}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
