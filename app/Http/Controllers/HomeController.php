<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Slider;
use App\Models\User;


class HomeController extends Controller
{
    public function index()
    {

        $slider = Slider::all();
        $allProduct = Product::all();
        $allManu = Manufacturer::all();
        $user = session('user');
        return view('pages.home')->with('allProduct', $allProduct)->with('allManu', $allManu)->with('slider', $slider)->with('user', $user);


    }
}
