<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $productName;
    public $shortDescription;
    public $stock;
    public $price;

    public function render()
    {
        return view('livewire.products');
    }

    public function save()
    {
        $this->validate([
            'productName' => 'required',
            'shortDescription' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'product_name' => $this->productName,
            'short_description' => $this->shortDescription,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);

        return redirect()->to('/dashboard');
    }

}
