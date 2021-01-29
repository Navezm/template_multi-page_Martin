<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

class ProductsController extends Controller
{
    public function products(){
        $coffee = [
            (object)['span1' => 'Blended to Perfection', 'span2' => 'Coffees & Teas', 'img' => 'img/products-01.jpg', 'p' => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more."]
        ];
        $bulk = [
            (object)['span1' => 'From Around the World', 'span2' => 'Bulk Speciality Blends', 'img' => 'img/products-03.jpg', 'p' => "Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."]
        ];
        $bakery = [
            (object)['span1' => 'Delicious Treats, Good Eats', 'span2' => 'Bakery & Kitchen', 'img' => 'img/products-02.jpg', 'p' => 'Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.']
        ];
        $header = [
            (object)['span1' => 'A Free Bootstrap 4 Business Theme', 'span2' => 'Business Casual', 'a1' => 'Start Bootstrap', 'a2' => 'Home', 'a3' => 'About', 'a4' => 'Products', 'a5' => 'Store']
        ];
        $footer = [
            (object)['p' => 'Copyright © Your Website 2019']
        ];
        $urlRelatif = Route::getCurrentRoute()->uri();
        return view('pages.products', compact('urlRelatif', 'coffee', 'bulk', 'bakery', 'header', 'footer'));
    }
}
