<x-modal modalId="modalProduct" modalTitle="Productos" modalSize="modal-lg">
    <form wire:submit={{ $Id == 0 ? 'store' : "update($Id)" }}>
        <div class="form-row">

            {{-- Input name --}}
            <div class="form-group col-md-7">
                <label for="name">Nombre:</label>
                <input wire:model='name' type="text" class="form-control" placeholder="Nombre producto" id="name">
                @error('name')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Select category --}}
            <div class="form-group col-md-5">
                <label for="category_id">Categoria:</label>

                <select wire:model='category_id' id="category_id" class="form-control">
                    <option value="0">Seleccionar</option>
                    @foreach ($this->categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>

                @error('category_id')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Textarea descripcion --}}
            <div class="form-group col-md-12">
                <label for="descripcion">Descripcion:</label>

                <textarea wire:model='descripcion' id="descripcion" class="form-control" rows="3"></textarea>

                @error('descripcion')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input precio compra --}}
            <div class="form-group col-md-4">
                <label for="precio_compra">Precio compra:</label>
                <input wire:model='precio_compra' min="0" step="any" type="number" class="form-control" placeholder="Precio compra"
                    id="precio_compra">
                @error('precio_compra')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input precio venta --}}
            <div class="form-group col-md-4">
                <label for="precio_venta">Precio venta:</label>
                <input wire:model='precio_venta' min="0" step="any" type="number" class="form-control" placeholder="Precio venta"
                    id="precio_venta">
                @error('precio_venta')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input codigo barras --}}
            <div class="form-group col-md-4">
                <label for="codigo_barras">Codigo barras:</label>
                <input wire:model='codigo_barras' type="text" class="form-control" placeholder="Codigo barras"
                    id="codigo_barras">
                @error('codigo_barras')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input Stock --}}
            <div class="form-group col-md-4">
                <label for="stock">Stock:</label>
                <input wire:model='stock' min="0" type="number" class="form-control" placeholder="Stock del producto"
                    id="stock">
                @error('stock')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input Stock minimo --}}
            <div class="form-group col-md-4">
                <label for="stock_minimo">Stock Minimo:</label>
                <input wire:model='stock_minimo'min="0" type="number" class="form-control" placeholder="Stock minimo"
                    id="stock_minimo">
                @error('stock_minimo')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input fecha vencimiento --}}
            <div class="form-group col-md-4">
                <label for="fecha_vencimiento">Fecha vencimiento:</label>
                <input wire:model='fecha_vencimiento' type="date" class="form-control" id="fecha_vencimiento">
                @error('fecha_vencimiento')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Checkbox active --}}
            <div class="form-group col-md-3">
                <div class="icheck-primary">
                    <input wire:model='active' type="checkbox" id="active" checked>
                    <label for="active">¿Esta activo?</label>
                </div>
                @error('active')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input imagen --}}
            <div class="form-group col-md-3">
                <label for="image">Imagen</label>
                <input wire:model='image' type="file" id="image" accept="image/*">
                @error('image')
                    <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- imagen --}}
            <div class="form-group col-md-6">

                @if($Id>0)
                    <x-image :item="$product= App\Models\Product::find($Id)" size="200" float="float-right" />
                @endif 
                @if($this->image)
                    <img src="{{ $image->temporaryUrl() }}" class="rounded float-right" width="200">
                @endif
            </div>
        </div>
        <hr>
        <button wire:loading.attr='disabled' class="btn btn-primary float-right">{{ $Id == 0 ? 'Guardar' : 'Editar' }}</button>
    </form>
</x-modal>
