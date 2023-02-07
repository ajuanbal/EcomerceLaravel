@extends('layouts.app-admin')

@section('template_title')
    Create Categoria
@endsection

@section('content')
@include('partials.fun-admin')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-light" href="{{ route('categorias.index') }}"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                        </div>
                        <h4 class="card-title">Registrar Categoria</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
