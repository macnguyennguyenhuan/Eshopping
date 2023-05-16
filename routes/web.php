<?php

use config\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Front End
Route::get('/', [HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);

//Back End (Admin)
Route::get('/login',[\App\Http\Controllers\AdminController::class,'index']);
Route::post('/admin',[\App\Http\Controllers\AdminController::class,'showDashboard']);
Route::get('/logout',[\App\Http\Controllers\AdminController::class,'logout']);
Route::post('/admin-dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);

//Product
Route::resource('admin/product',ProductController::class);


//Manufacturer
Route::resource('/admin/manufacturer', ManufacturerController::class);

//User Management
Route::get('/all-users',[\App\Http\Controllers\AuthController::class,'all_users']);
Route::get('/add-user',[\App\Http\Controllers\AuthController::class,'add_user']);
Route::get('/register-auth',[\App\Http\Controllers\AuthController::class,'register_auth']);
Route::get('/login-auth',[\App\Http\Controllers\AuthController::class,'login_auth']);
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register']);
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login']);

