<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <button class="btn btn-light mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="container">

        <a class="navbar-brand" href="{{ route('privada') }}">
            JUELEMANTARYBUSINESS
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>
                </li>
                @if (auth()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-circle-user fa-lg"></i>
                            @auth
                                {{ Auth::user()->name }}
                            @endauth
                        </a>
                        <ul class="dropdown-menu">
                            <a class="btn btn-light dropdown-item-text text-center text-dark"
                                href="{{ route('logout') }}">Cerrar session</a>
                            <a class="btn btn-light dropdown-item-text text-center text-dark my-1"
                                href="{{ route('privada') }}">Administracion</a>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-circle-user fa-lg"></i>
                            Invitado
                        </a>
                        <ul class="dropdown-menu">
                            <a class="btn btn-secondary dropdown-item-text text-center text-white"
                                href="{{ route('login') }}">Iniciar session</a>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
