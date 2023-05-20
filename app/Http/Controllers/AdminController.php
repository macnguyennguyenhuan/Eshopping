<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin');
        }
    }
<<<<<<< HEAD
    public function showDashboard(){

        $this->AuthLogin();
        return view('admin.dashboard');
        return view('admin.index');

    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email' ,$admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
=======

    public function show_dashboard(){

        $this->AuthLogin();
        return view('admin.dashboard');
>>>>>>> origin/main
        }

    public function dashboard(Request $request){
        $request->validate([
            'admin_email' => 'required',
            'admin_password' => 'required',
        ]);

        $credentials = $request->only('admin_email', 'admin_password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function allUsers(){
        $admin['admins'] = DB::table('tbl_admin')->get();
        return view('all_users',$admin);
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');

    }
}
