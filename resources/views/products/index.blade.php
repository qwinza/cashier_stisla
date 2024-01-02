@extends('layouts.master')

@section('content')
    @include('partials.navbar')

    <div class="main-content mt-5">
        <div class="row">
            <div class="col-8 mb-3">
                <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
            </div>
            <div class="card col-8">
                <div class="card-header">
                    <h4>Product Info</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
