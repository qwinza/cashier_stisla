@extends('layouts.master');

<div id="app">
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <a href="{{ route('cashier') }}" class="navbar-brand sidebar-gone-hide">Stisla</a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('cashier') }}" class="nav-link">Cashier</a></li>
                    <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link">Product</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Invoice</a></li>
                </ul>
            </div>
            <a href="#" class="has-icon text-white"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
</div>
