@extends('layouts.app-admin')

@section('template_title')
    Update Proveedor
@endsection

@section('content')
@include('partials.fun-admin')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-light" href="{{ route('proveedors.index') }}"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                        </div>
                        <h4 class="card-title">Actualizar Proveedor</h4>

                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('proveedors.update', $proveedor->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proveedor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
