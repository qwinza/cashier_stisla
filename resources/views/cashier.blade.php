@extends('layouts.master')

@section('content')
    @include('partials.navbar')

    <div class="main-content mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Input Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" class="form-inline">
                            <input type="text" name="productName" class="form-control mb-2 mr-sm-2"
                                placeholder="Product Name">
                            <select name="selectedProduct" class="form-control">
                                <option value="">Select Product</option>
                            </select>
                            <input type="text" name="quantity" class="form-control mb-2 mr-sm-2" placeholder="Quantity">
                            <input type="text" name="username" class="form-control mb-2 mr-sm-2" placeholder="Username">
                            <button type="submit" class="btn btn-primary mb-2">Add Product</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Cashier Info</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <!-- Tambahkan kolom untuk Subtotal -->
                                    <td>Subtotal Value</td>
                                </tr>
                                <!-- Tambahkan baris-baris data lainnya jika diperlukan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Transaction Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="total">Total:</label>
                            <input type="text" class="form-control" id="total" readonly>
                        </div>

                        <div class="form-group">
                            <label for="inputMoney">Input Money:</label>
                            <input wire:model="inputMoney" type="text" class="form-control" id="inputMoney">
                        </div>

                        <div class="form-group">
                            <label for="change">Change:</label>
                            <input type="text" class="form-control" id="change" readonly>
                        </div>

                        <button wire:click="processTransaction" class="btn btn-primary">Process Transaction</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
