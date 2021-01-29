<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class StoreController extends Controller
{
    public function store(){
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('pages.store', compact('urlRelatif'));
    }
}
