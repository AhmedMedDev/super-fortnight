<?php

namespace App\Http\Livewire\Cores;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartKernel extends Component
{
    public function render()
    {
        return view('livewire.cores.cart-kernel',[
            'cart_content' => Cart::content(),
            'cart_total' => Cart::priceTotal()
        ]);
    }
}
