<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        
        return view('back.footer.allFooter');
    }
}
