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
Route::get('/users',[\App\Http\Controllers\UserManagement::class,'users']);

Route::get('tim-kiem', [ProductController::class, 'timKiemSP']);
