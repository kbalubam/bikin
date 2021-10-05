<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Icon;
use App\Models\Titre;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        $titreAbout = Titre::find(2);
        return view('back.about.allAbout',compact('abouts','titreAbout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::where('linksocial_id',null)->get();

        return view('back.about.create',compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        $rq->validate([
                "titreSec"=>["required"],
                "descriptionSec"=>["required"],
                "icon_id"=>["required"],
        ]);

        $about = new About;
        $about->titreSec = $rq->titreSec;
        $about->descriptionSec = $rq->descriptionSec;
        $about->icon_id = $rq->icon_id;
        $about->save();
        
        return redirect()->route('sectionsAbout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $icons = Icon::where('linksocial_id',null)->get();

        
        return view('back.about.edit',compact('about','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, About $about)
    {
        $rq->validate([
                "titreSec"=>["required"],
                "descriptionSec"=>["required"],
                "icon_id"=>["required"],
        ]);


        $about->titreSec = $rq->titreSec;
        $about->descriptionSec = $rq->descriptionSec;
        $about->icon_id = $rq->icon_id;
        $about->save();
        
        return redirect()->route('sectionsAbout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->back();
    }
}
