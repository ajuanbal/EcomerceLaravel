@extends('layouts.app-admin')

@section('template_title')
    {{ $proveedor->name ?? 'Show Proveedor' }}
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
                                <a class="btn btn-light" href="{{ route('proveedors.index') }}"><i class="fa-solid fa-arrow-left"></i>Volver</a>
                            </div>
                            <h4 class="card-title">Ver Proveedor</h4>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedor->name }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $proveedor->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $proveedor->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $proveedor->ruc }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            @if ($proveedor->state==0)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
