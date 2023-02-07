<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            JUELEMANTARYBUSINESS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>
                </li>
                @if (auth()->check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="badge badge-pill badge-dark">
                                <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity() }}
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <ul class="list-group">
                                @include('partials.cart-drop')
                            </ul>
                        </ul>
                    </li>

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
                            @if (Auth::user()->name == 'admin')
                                <a class="btn btn-light dropdown-item-text text-center text-dark my-1"
                                    href="{{ route('privada') }}">Administracion</a>
                            @endif
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
