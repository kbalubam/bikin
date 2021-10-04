<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $titreFeatures = Titre::find(3);
        $features = Feature::all();
        return view('back.feature.allFeature', compact('features','titreFeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view('back.feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Feature $feature)
    {
        $rq->validate([
            "img1"=>["required"],
            "img2"=>["required"],
            "titre1"=>["required"],
            "sousTitre1"=>["required"],
            "li1"=>["required"],
            "li2"=>["required"],
            "li3"=>["required"],
            "titre2"=>["required"],
            "sousTitre2"=>["required"],
            "description"=>["required"],
        ]);


        Storage::disk('public')->delete('img/'.$feature->img1);
        Storage::disk('public')->delete('img/'.$feature->img2);
        $feature->img1 = $rq->file('img1')->hashName();
        $feature->img2 = $rq->file('img2')->hashName();
        $rq->file('img1')->storePublicly('img','public');
        $rq->file('img2')->storePublicly('img','public');
        $feature->titre1 = $rq->titre1;
        $feature->sousTitre1 = $rq->sousTitre1;
        $feature->li1 = $rq->li1;
        $feature->li2 = $rq->li2;
        $feature->li3 = $rq->li3;
        $feature->titre2 = $rq->titre2;
        $feature->sousTitre2 = $rq->sousTitre2;
        $feature->description = $rq->description;
        $feature->save();

        return redirect()->route('sectionsFeature');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
    }
}
