<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $products = Cache::rememberForever('products', 
        fn () => DB::table('product_handler')->get());

        $men_products = [];
        $women_products = [];

        foreach ($products as $product) 
            $product->gender 
            ? array_push($men_products, $product) 
            : array_push($women_products, $product) ;

        return view('index', [
            'men_products' => $men_products,
            'womens_products' => $women_products,
        ]);
    }
}
