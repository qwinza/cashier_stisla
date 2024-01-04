<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class CashierInput extends Component
{
    public $productName;
    public $selectedProduct;
    public $quantity;
    public $price;
    public $products;

    public function render()
    {
        $products = Product::all();

        if ($this->selectedProduct) {
            $this->updateSelectedProduct();
        }

        return view('livewire.cashier-input', ['products' => $products]);
    }

    public function updatedSelectedProduct()
    {
        $this->updateSelectedProduct();
    }

    public function updatedQuantity()
    {
        $this->quantity = $this->selectedProduct ? max(1, $this->quantity) : 0;

        $this->updateSelectedProduct();
    }

    public function updateSelectedProduct()
    {
        $selectedProduct = Product::find($this->selectedProduct);

        if ($selectedProduct) {
            $this->price = $selectedProduct->price;
        } else {
            $this->price = 0;
            $this->quantity = 0;

        }
    }

    public function addProduct()
    {
        if ($this->selectedProduct) {
            $this->emitUp('productAdded', [
                'productName' => $this->productName,
                'quantity' => $this->quantity,
                'price' => $this->price ?: 0,
            ]);
        }

        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->productName = '';
        $this->selectedProduct = null;
        $this->quantity = 1;
        $this->price = 0;
    }


    public function mount()
    {
        $this->quantity = 1;
    }
}
