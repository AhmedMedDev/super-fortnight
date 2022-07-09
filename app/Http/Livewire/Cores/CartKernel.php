<?php

namespace App\Http\Livewire\Cores;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartKernel extends Component
{
    public $qty;

    public function updateQty($item_id, $quantity)
    {
        Cart::update($item_id, $quantity);
    }
    
    public function render()
    {
        return view('livewire.cores.cart-kernel',[
            'cart_content' => Cart::content(),
            'cart_total' => Cart::priceTotal()
        ]);
    }
}
