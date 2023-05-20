<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
<<<<<<< HEAD:app/Http/Controllers/HomeController.php
use App\Models\Product;
use App\Slider;
=======
use App\Models\User;

>>>>>>> c8ffbafe9419deff30297cf2a34d4375c2d8e841:config/HomeController.php

class HomeController extends Controller
{
    public function index(){

        $slider = Slider::all();
        $allProduct = Product::all();
        $allManu = Manufacturer::all();
<<<<<<< HEAD:app/Http/Controllers/HomeController.php
        return view('pages.home')->with('allProduct', $allProduct)->with('allManu', $allManu)->with('slider',$slider);
=======
        $user = session('user');
        return view('pages.home')->with('allProduct', $allProduct)->with('allManu', $allManu)->with('user',$user);
>>>>>>> c8ffbafe9419deff30297cf2a34d4375c2d8e841:config/HomeController.php
    }
}
