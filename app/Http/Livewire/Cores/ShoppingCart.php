<?php

namespace App\Http\Livewire\Cores;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ShoppingCart extends Component
{
    protected $listeners = ['refresh' => '$refresh'];
    
    public function render()
    {
        return view('livewire.cores.shopping-cart',[
            'cart_counter' => Cart::content()->count(),
            'cart_content' => Cart::content(),
            'cart_total' => Cart::priceTotal()
        ]);
    }
}
