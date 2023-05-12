<?php

namespace config;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
}
