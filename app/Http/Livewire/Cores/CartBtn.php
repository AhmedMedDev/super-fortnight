<?php

namespace App\Http\Livewire\Cores;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class CartBtn extends Component
{
    public function add_to_cart ($product_id, $quantity = 1) 
    {
        $product = DB::table('products')
        ->where('id', $product_id)->first();

        Cart::add(
            $product->id,
            $product->name,
            $quantity,
            $product->price / 100,
            220,
            ['thum' => $product->thum]
        );

    }

    public function render()
    {
        return view('livewire.cores.cart-btn');
    }
}
