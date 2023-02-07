<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU DE FUNCIONALIDADES</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GESTION DE INVENTARIO
          </a><hr>
          <ul class="dropdown-menu dropdown-menu-dark mx-2" style="width: 350px">
            <li><a class="dropdown-item" href="{{route('products.index')}}">GESTION PRODUCTOS</a></li>
            <li><a class="dropdown-item" href="{{route('categorias.index')}}">GESTION CATEGORIAS</a></li>
            <li><a class="dropdown-item" href="{{route('proveedors.index')}}">GESTION PROVEEDORES</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
