@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="card">
        <div class="card-header">
            <h4>Input Product</h4>
        </div>
        <div class="card-body">
            <form action="#" method="POST" class="form-inline">
                <input type="text" name="productName" class="form-control mb-2 mr-sm-2" placeholder="Product Name">
                <select name="selectedProduct" class="form-control">
                    <option value="">Select Product</option>
                </select>
                <input type="text" name="quantity" class="form-control mb-2 mr-sm-2" placeholder="Quantity">
                <input type="text" name="username" class="form-control mb-2 mr-sm-2" placeholder="Username">
                <button type="submit" class="btn btn-primary mb-2">Add Product</button>
            </form>
        </div>
    </div>
@endsection
