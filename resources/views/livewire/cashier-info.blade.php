@extends('layouts.master')

@section('content')
    @include('partials.navbar')

    <div>
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
@endsection
