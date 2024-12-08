<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

  
        // example of how to use the pivot table
        // $cart = Cart::find(1); 
        // $products = $cart->products; 

        // foreach ($products as $product) {
        //     echo $product->name . ' - Quantity: ' . $product->pivot->quantity;
        // }
}
