<?php

namespace App\Livewire;

use Livewire\Component;

class CashierInfo extends Component
{
    public $products = [];

    // Metode untuk menambahkan produk ke dalam tabel
    public function addProduct($productName, $price, $quantity)
    {
        $subtotal = $price * $quantity;

        // Menambahkan produk ke dalam array $products
        $this->products[] = [
            'id' => count($this->products) + 1,
            'name' => $productName,
            'price' => $price,
            'quantity' => $quantity,
            'subtotal' => $subtotal,
        ];

        // Reset input setelah menambahkan produk
        $this->resetInputs();
    }

    // Metode untuk mereset input setelah menambahkan produk
    private function resetInputs()
    {
        // Reset variabel yang digunakan untuk input produk
        // Gantilah sesuai dengan input yang digunakan
        $this->emit('resetInputs');
    }

    public function render()
    {
        return view('livewire.cashier-info');
    }
}
