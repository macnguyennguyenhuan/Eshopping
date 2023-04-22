<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('users', [CustomAuthController::class, 'allUsers'])->name('users');
Route::get('detail', [CustomAuthController::class, 'detail'])->name('detail');

Route::get('/welcome', 'Controller@showPageGuest');

Route::get('/admin', 'Controller@showPageAdmin');

Route::get('user/profile',function(){
    return redirect()->route('profile');
})->name('profile');
Route::get('/',function(){
    return view('welcome');
});
Route::get('/hello-world', function (){
    return view('hello-world');
});

Route::get('hoten/{ten}',function ($ten){
    return 'hello '.$ten;
});

