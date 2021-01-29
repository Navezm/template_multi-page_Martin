<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class AboutController extends Controller
{
    public function about(){
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('pages.about', compact('urlRelatif'));
    }
}
