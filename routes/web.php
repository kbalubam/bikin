<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\TitreController;
use App\Models\About;
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
Route::resource('/back/navbars', NavbarController::class);
Route::resource('/back/portfolios', NavbarController::class);
Route::resource('/back/services', NavbarController::class);
Route::resource('/back/teams', NavbarController::class);
Route::resource('/back/testimonials', NavbarController::class);
Route::resource('/back/abouts', AboutController::class);
Route::resource('/back/titres', TitreController::class);


Route::get('/back/sectionsAbout',function(){
    $abouts = About::all();
    return view('back.about.allSectionAbout',compact('abouts'));
})->name('sectionsAbout');



Route::get('/back',function(){
    return view('back.pages.home');
})->name('back');
Route::resource('back/abouts', AboutController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
