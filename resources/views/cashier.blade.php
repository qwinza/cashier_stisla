@extends('layouts.master')

@section('content')
    @include('partials.navbar')

    <div class="container" style="margin-top: 10%">
        <div class="row">
            <div class="col-md-12">
                <div class="row mb-4">
                    <div class="col-md-12">
                        @livewire('cashier-input', ['products' => $products])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                @livewire('cashier-info')
            </div>
            <div class="col-md-4">
                @livewire('cashier-log')
            </div>
        </div>
    </div>
@endsection
