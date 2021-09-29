<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $titreHero = Titre::find(1);
        $titreAbout = Titre::find(2);
        // dd($titreAbout);
        $titreFeatures = Titre::find(3);
        $titreServices = Titre::find(4);
        $titrePortfolio = Titre::find(5);
        $titreTestimonials = Titre::find(6);
        $titreTeam = Titre::find(7);
        $titreContact = Titre::find(8);
        return view('front.pages.home',compact('titreHero','titreAbout','titreFeatures','titreServices','titrePortfolio','titreTestimonials','titreTeam','titreContact'));
    }
}
