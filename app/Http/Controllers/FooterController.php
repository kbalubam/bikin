<?php

namespace App\Http\Controllers;

use App\Models\Adressfooter;
use App\Models\Footer;
use App\Models\Infosfooter;
use App\Models\Linksocial;
use App\Models\Newsletterinfo;
use App\Models\Serviceslinkfooter;
use App\Models\Soustitrefooter;
use App\Models\Titre;
use App\Models\Usefullinkfooter;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footers  = Footer::all();
        
        $adressfooters = Adressfooter::all();
    
        $infosfooter = Infosfooter::all();
     
        $titreBikin = Titre::find(9);
        $usefullinks = Usefullinkfooter::all();
        $serviceslinks = Serviceslinkfooter::all();
        $newsletterinfo = Newsletterinfo::all();
        $linksocials = Linksocial::all();
        $st1footer = Soustitrefooter::find(1);
        $st2footer = Soustitrefooter::find(2);
        $st3footer = Soustitrefooter::find(3);
        return view('back.footer.allFooter',compact('footers','adressfooters','infosfooter','titreBikin','usefullinks','serviceslinks','newsletterinfo','linksocials','st1footer','st2footer','st3footer'));
    }
}
