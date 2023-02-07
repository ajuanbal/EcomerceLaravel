@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="card mx-auto" style="width:40rem">
            <div class="card-header">
                <h1 class="text-center">JUELEMANTARYBUSINESS</h1>
                <div class="rounded-circle text-center">
                    <i class="fa-regular fa-circle-user fa-5x"></i>
                </div>
                <h2 class="text-center">Iniciar session</h2>
            </div>
            <div class="card-body ">
                <form action="{{ route('iniciar-sesion') }}" method="post">
                    @csrf
                    <div class="mb-3 text-center">
                        <label for="emailInput" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" id="emailInput" name="email" required
                            autocomplete="disable">
                    </div>
                    <div class="mb-3 text-center">
                        <label for="passwordInput" class="form-label "><b>Password</b></b></label>
                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" id="rememberCheck" class="form-check-input">
                        <label for="rememberCheck" class="form-check-label">
                            Mantener iniciada la sesion
                        </label>
                    </div>
                    <div class="mb-3">
                        <p>¿No tienes cuenta?
                            <a href="{{ route('registro') }}">Registrarte</a>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary ">Iniciar Session</button>
                </form>
            </div>
        </div>
    </div>
@endsection
