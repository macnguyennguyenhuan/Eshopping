<?php

namespace config;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        $allProduct = Product::all();
        $allManu = Manufacturer::all();
        $user = session('user');
        return view('pages.home')->with('allProduct', $allProduct)->with('allManu', $allManu)->with('user',$user);
    }
}
