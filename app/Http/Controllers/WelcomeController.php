<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{
    public function welcome(){
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('welcome', compact('urlRelatif'));
    }
}
