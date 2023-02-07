@extends('layouts.app-admin')
@auth
    @if (Auth::user()->name == 'admin')
        @section('content')
            @include('partials.fun-admin')
            <div class="" style="margin-top: 80px">
                <div class="col-md-9  ms-sm-auto col-lg-10 px-md-4">
                    <h1>Bienvenido al panel administrativo </h1>
                    <h2>Usuario: @auth {{ Auth::user()->name }} @endauth</h2>
                </div>
            @endsection
        @else
            @section('content')
                <div class="container" style="margin-top: 80px">
                    <h1 class="text-center">Tu usuario no cuenta con los privilegios de esta pantalla</h1>
                    <a class="btn btn-secondary" href="{{ route('logout') }}" style="width: 100px">Salir</a>
                </div>
            @endsection
    @endif
@endauth
