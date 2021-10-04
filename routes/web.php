<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Team;
use App\Models\Testimonial;
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



Route::get('/', [HomeController::class,'index'])->name('home');
Route::resource('/back/navbars', NavbarController::class);
Route::resource('/back/portfolios', PortfolioController::class);
Route::resource('/back/services', ServicesController::class);
Route::resource('/back/teams', TeamController::class);
Route::resource('/back/testimonials', TestimonialController::class);
Route::resource('/back/abouts', AboutController::class);
Route::resource('/back/titres', TitreController::class);
Route::resource('/back/contacts', ContactController::class);
Route::resource('/back/features', FeatureController::class);
Route::resource('/back/footers', FooterController::class);
Route::resource('/back/heroes', HeroController::class);


Route::get('/back/sectionsAbout',function(){
    $abouts = About::all();
    return view('back.about.allSectionAbout',compact('abouts'));
})->name('sectionsAbout');
Route::get('/back/sectionsContact',function(){
    $contacts = Contact::all();
    return view('back.contact.allSectionContact',compact('contacts'));
})->name('sectionsContact');
Route::get('/back/sectionsFeatures',function(){
    $features = Feature::all();
    return view('back.feature.allSectionFeature',compact('features'));
})->name('sectionsFeature');
Route::get('/back/sectionsHero',function(){
    
    $heroes = Hero::all();
    return view('back.hero.allSectionHero',compact('heroes'));
})->name('sectionsHero');
Route::get('/back/sectionsNavbar',function(){
    
    $navbars = Navbar::all();
    return view('back.Navbar.allSectionNavbar',compact('navbars'));
})->name('sectionsNavbar');

Route::get('/back/sectionsPortfolio',function(){
    $portfolios = Portfolio::all();
    return view('back.portfolio.allSectionPortfolio',compact('portfolios'));
})->name('sectionsPortfolio');

Route::get('/back/sectionsService',function(){
    $services = Services::all();
    return view('back.services.allSectionService',compact('services'));
})->name('sectionsService');

Route::get('/back/sectionsTeam',function(){

    $teams = Team::all();
    return view('back.team.allSectionTeam',compact('teams'));
})->name('sectionsTeam');

Route::get('/back/sectionsTestimonial',function(){

    $testimonials = Testimonial::all();
    return view('back.testimonial.allSectionTestimonial',compact('testimonials'));
})->name('sectionsTestimonial');



Route::get('/back',function(){
    return view('back.pages.home');
})->name('back');
Route::resource('back/abouts', AboutController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
