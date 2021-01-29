<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class AboutController extends Controller
{
    public function about(){
        $about = [
            (object)['span1' => 'Strong Coffee, Strong Roots', 'span2' => 'About Our Cafe', 'p1' => 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.', 'p2' => 'We guarantee that you will fall in', 'em' => 'lust', 'p3' => 'with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.']
        ];
        $header = [
            (object)['span1' => 'A Free Bootstrap 4 Business Theme', 'span2' => 'Business Casual', 'a1' => 'Start Bootstrap', 'a2' => 'Home', 'a3' => 'About', 'a4' => 'Products', 'a5' => 'Store']
        ];
        $footer = [
            (object)['p' => 'Copyright © Your Website 2019']
        ];
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('pages.about', compact('urlRelatif', 'about', 'header', 'footer'));
    }
}
