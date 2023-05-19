<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Product;
use App\Slider;

class HomeController extends Controller
{
    public function index(){

        $slider = Slider::all();
        $allProduct = Product::all();
        $allManu = Manufacturer::all();
        return view('pages.home')->with('allProduct', $allProduct)->with('allManu', $allManu)->with('slider',$slider);
    }
}
