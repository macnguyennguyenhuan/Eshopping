<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class UserControler extends Controller
{
    public function allUsers(){
        $users = DB::select('SELECT id,name, email, created_at,phone,Age FROM users');
        return view('user.allUsers',['users' => $users]);
    }
}
