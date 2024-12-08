<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Welcome extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.welcome', compact('products'));
    }
}
