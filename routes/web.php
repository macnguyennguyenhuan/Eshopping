<?php

use config\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;

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

Route::get('product',function(){
    return view('cart.checkoutproducts');    
});
Route::get('detail/{id}',[ProductController::class,'show'])->name('detail.id');
Route::post('detail/store',[CommentController::class,'store']);
//Manufacturer
Route::resource('/admin/manufacturer', ManufacturerController::class);

//User Management
Route::get('/all-users',[\App\Http\Controllers\AuthController::class,'all_users']);
Route::get('/add-user',[\App\Http\Controllers\AuthController::class,'add_user']);
Route::get('/register-auth',[\App\Http\Controllers\AuthController::class,'register_auth']);
Route::get('/login-auth',[\App\Http\Controllers\AuthController::class,'login_auth']);
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register']);
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login']);

//Cart

Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::post('/update-cart','CartController@update_cart');
Route::post('/save-cart','CartController@save_cart');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/show-cart','CartController@show_cart');
Route::get('/gio-hang','CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::get('/del-product/{session_id}','CartController@delete_product');
Route::get('/del-all-product','CartController@delete_all_product');
