<?php

use config\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Front End
Route::get('/', [HomeController::class,'index']);
Route::get('/trang-chu',[HomeController::class,'index']);

//Back End (Admin)
Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);
Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'showDashboard']);
Route::get('/logout',[\App\Http\Controllers\AdminController::class,'logout']);
Route::post('/admin-dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);

//Category Product
Route::get('/manufacture',[\App\Http\Controllers\CategoryProduct::class,'manufacture']);
Route::get('/add-product',[\App\Http\Controllers\CategoryProduct::class,'add_product']);
Route::get('/all-products',[\App\Http\Controllers\CategoryProduct::class,'all_products']);

//User Management
Route::get('/users',[\App\Http\Controllers\UserManagement::class,'users']);
