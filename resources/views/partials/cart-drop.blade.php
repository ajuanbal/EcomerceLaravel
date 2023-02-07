@if (count(\Cart::getContent()) > 0)
    <div style="overflow-y: scroll; max-height:350px">
        <h4 class="text-center">Articulos</h4>
        @foreach (\Cart::getContent() as $item)
            <li class="list-group-item">
                <div class="car">
                    <div class="card-header">
                        <b>{{ $item->name }}</b>
                        <br><small>Ud: {{ $item->quantity }}</small>
                        <img src="/images/{{ $item->attributes->image }}" style="width: 10rem; height: 10rem;">
                    </div>
                    <div class="car-body">
                        <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </div>
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-9">
                <b>Total: </b>${{ \Cart::getTotal() }}
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-danger btn-sm ml-auto"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row col-lg-10 mx-auto" style="margin: 0px;">
        <a class="btn btn-primary btn-sm btn-block" href="{{ route('cart.index') }}">
            CARRITO <i class="fa fa-arrow-right"></i>
        </a>
        <h1></h1>
        <a class="btn btn-secondary btn-sm btn-block" href="">
            COMPRAR <i class="fa fa-arrow-right"></i>
        </a>
    </div>
@else
    <li class="list-group-item">
        <b class="text-center">Carrito vacio</b>
    </li>
@endif
