<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class StoreController extends Controller
{
    public function store(){
        $time = [
            (object)['span1' => 'Come On In', 'span2' => "We're Open", 'span3' => 'Closed', 'li1' => 'Sunday', 'li2' => 'Monday', 'li3' => 'Tuesday', 'li4' => 'Wednesday', 'li5' => 'Thursday', 'li6' => 'Friday', 'li7' => 'Saturday', 'time1' => '7:00 AM to 8:00 PM', 'time2' => '9:00 AM to 5:00 PM', 'address1' => '1116 Orchard Street', 'address2' => 'Golden Valley, Minnesota', 'call' => 'Call Anytime', 'phone' => '(317) 585-8468']
        ];
        $about = [
            (object)['span1' => 'Strong Coffee, Strong Roots', 'span2' => 'About Our Cafe', 'p1' => 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.', 'p2' => 'We guarantee that you will fall in', 'em' => 'lust', 'p3' => 'with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.', 'img' => 'img/about.jpg']
        ];
        $header = [
            (object)['span1' => 'A Free Bootstrap 4 Business Theme', 'span2' => 'Business Casual', 'a1' => 'Start Bootstrap', 'a2' => 'Home', 'a3' => 'About', 'a4' => 'Products', 'a5' => 'Store']
        ];
        $footer = [
            (object)['p' => 'Copyright © Your Website 2019']
        ];
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('pages.store', compact('urlRelatif', 'about', 'time', 'header', 'footer'));
    }
}
