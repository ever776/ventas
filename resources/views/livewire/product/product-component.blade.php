<div>
    <x-card cardTitle="Listado productos ({{ $this->totalRegistros }})">
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary" wire:click='create'>
                <i class="fas fa-plus-circle"></i>Crear Producto</a>
        </x-slot>
        <x-table>
            <x-slot:thead>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio venta</th>
                <th>Stock</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th width="3%">...</th>
                <th width="3%">...</th>
                <th width="3%">...</th>
            </x-slot>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <x-image :item="$product" />
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{!! $product->precio !!}</td>
                    <td>{!! $product->stockLabel !!}</td>
                    <td>
                        <a class="badge badge-secondary" href="{{ route('categories.show',$product->category->id) }}">{{ $product->category->name }}</a>
                    </td>
                    <td>{!! $product->activeLabel !!}</td>
                    <td>
                        <a href="{{ route('products.show',$product) }}" class="btn btn-success btn-sm" title="Ver">
                            <i class="far fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" wire:click='edit({{ $product->id }})' class="btn btn-primary btn-sm" title="Editar">
                            <i class="far fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a wire:click="$dispatch('delete',{id: {{ $product->id }}, eventName:'destroyProduct'})" class="btn btn-danger btn-sm" title="Eliminar">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @empty
            <tr class="text-center">
                <td colspan="10">Sin registros</td>
            </tr>
            @endforelse
        </x-table>

        <x-slot:cardFooter>
            {{ $products->links() }}
        </x-slot>

    </x-card>
@include('products.modal')
</div>

