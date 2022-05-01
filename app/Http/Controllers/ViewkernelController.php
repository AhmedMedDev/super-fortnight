<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewkernelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($page)
    {
        return (view()->exists($page)) 
        ? view($page)
        : view('common.404');
    }
}
