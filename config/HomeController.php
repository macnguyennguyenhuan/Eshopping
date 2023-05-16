<?php

namespace config;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Manufacturer;

class HomeController extends Controller
{
    public function index(){
        $allProduct = Product::all();
        $allManu = Manufacturer::all();
        return view('pages.home')->with('allProduct', $allProduct)->with('allManu', $allManu);
    }
}
