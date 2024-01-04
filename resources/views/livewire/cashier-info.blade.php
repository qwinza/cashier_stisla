<div class="col-md-12">
    <div class="card mt-3">
        <div class="card-header">
            <h4>Cashier Info</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered font-weight-bold">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Name Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <th scope="row">{{ $product['id'] }}</th>
                                <td>{{ $productName }}</td>
                                <td>{{ $product['name'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['quantity'] }}</td>
                                <td>{{ $product['subtotal'] }}</td>
                            </tr>
                        @endfor
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
