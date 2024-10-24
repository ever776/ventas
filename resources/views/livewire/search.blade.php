<div>
    <form>
        <div class="input-group">
            <input wire:model.live='search' type="search" class="form-control" placeholder="Buscar Producto...">
            <div class="input-group-append">
                <button class="btn btn-default" wire:click.prevent>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <ul class="list-group" id="list-search">
        @foreach ($products as $product)
            <li class="list-group-item">
                <h5>
                    <a href="{{ route('products.show',$product) }}" class="text-white">
                        <x-image :item="$product" size="50" />
                        {{ $product->name }}
                    </a>
                </h5>
                <div class="d-flex justify-content-between">
                    <div class="mr-2">
                        Precio venta:
                        <span class="badge badge-pill badge-info">
                            {!! $product->precio !!}
                        </span>
                    </div>
                    <div>
                        {!! $product->stockLabel !!}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
