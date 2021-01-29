<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class ProductsController extends Controller
{
    public function products(){
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('pages.products', compact('urlRelatif'));
    }
}
