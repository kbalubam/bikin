<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Testimonial;
=======
use App\Models\About;
use App\Models\Adressfooter;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Infosfooter;
use App\Models\Linksocial;
use App\Models\Newsletterinfo;
use App\Models\Serviceslinkfooter;
use App\Models\Soustitrefooter;
>>>>>>> 7dc6827c0f1886011edd6d021e2550d39cacb99e
use App\Models\Titre;
use App\Models\Usefullinkfooter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $titreHero = Titre::find(1);
        $titreAbout = Titre::find(2);
        $titreFeatures = Titre::find(3);
        $titreServices = Titre::find(4);
        $titrePortfolio = Titre::find(5);
        $titreTestimonials = Titre::find(6);
        $titreTeam = Titre::find(7);
<<<<<<< HEAD
        $titreContact = Titre::find(8);
       return view('front.pages.home',compact('titreHero','titreAbout','titreFeatures','titreServices','titrePortfolio','titreTestimonials','titreTeam','titreContact'));
=======

        $titreContact = Titre::find(8);      
        $titreBikin = Titre::find(9);      
        $abouts = About::all();
        $contacts = Contact::all();
        $features = Feature::all();
        $serviceslinks = Serviceslinkfooter::all(); 
        $usefullinks = Usefullinkfooter::all();
        $st1footer = Soustitrefooter::find(1);
        $st2footer = Soustitrefooter::find(2);
        $st3footer = Soustitrefooter::find(3);
        $infosfooter = Infosfooter::all();
        $linksocials = Linksocial::all();
        $adressfooters = Adressfooter::all();
        $newsletterinfo = Newsletterinfo::all();
        $heroes = Hero::all();
        return view('front.pages.home',compact('titreHero','titreAbout','titreFeatures','titreServices','titrePortfolio','titreTestimonials','titreTeam','titreContact', 'abouts','contacts','features','serviceslinks','usefullinks','st1footer','st2footer','st3footer','infosfooter','linksocials','titreBikin','newsletterinfo','adressfooters','heroes'));
>>>>>>> 7dc6827c0f1886011edd6d021e2550d39cacb99e
    }
}
