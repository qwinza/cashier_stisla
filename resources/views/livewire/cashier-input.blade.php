<div class="card mt-3">
    <div class="card-header">
        <h4>Cashier Input</h4>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="addProduct" class="row">
            <div class="form-group col-md-3">
                <input wire:model="productName" type="text" name="productName" class="form-control" placeholder="Customer Name">
            </div>
            <div class="form-group col-md-3">
                <select wire:model="selectedProduct" class="form-control">
                    <option value="">Select Product</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <input wire:model="quantity" type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="form-group col-md-3">
                <input wire:model="price" type="text" name="price" class="form-control" placeholder="Price" readonly>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
    </div>
</div>
