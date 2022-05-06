<?php

namespace App\Http\Livewire\Main;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Shop extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Cache::rememberForever('products', 
        fn () => DB::table('product_handler')->get());
    }

    public function render()
    {
        return view('livewire.main.shop');
    }
}
