<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class,'index']);
Route::resource('/navbars', NavbarController::class);
Route::resource('/portfolios', NavbarController::class);
Route::resource('/services', NavbarController::class);
Route::resource('/teams', NavbarController::class);
Route::resource('/testimonials', NavbarController::class);






Route::get('/back',function(){
    return view('back.pages.home');
})->name('back');
Route::resource('back/abouts', AboutController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
