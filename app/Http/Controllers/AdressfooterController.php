<?php

namespace App\Http\Controllers;

use App\Models\Adressfooter;
use Illuminate\Http\Request;

class AdressfooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adressfooters = Adressfooter::all();
        return view('back.adressfooter.allSectionAdressfooter',compact('adressfooters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.adressfooter.create');
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
            "street"=>["required"],
            "city"=>["required"],
            "country"=>["required"],
        ]);
        $adressfooter = new Adressfooter;
        $adressfooter->street = $rq->street;
        $adressfooter->city = $rq->city;
        $adressfooter->country = $rq->country;

        $adressfooter->save();

        return redirect()->route('adressfooters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adressfooter  $adressfooter
     * @return \Illuminate\Http\Response
     */
    public function show(Adressfooter $adressfooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adressfooter  $adressfooter
     * @return \Illuminate\Http\Response
     */
    public function edit(Adressfooter $adressfooter)
    {
        return view('back.adressfooter.edit',compact('adressfooter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adressfooter  $adressfooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Adressfooter $adressfooter)
    {
        $rq->validate([
            "street"=>["required"],
            "city"=>["required"],
            "country"=>["required"],
        ]);
        $adressfooter->street = $rq->street;
        $adressfooter->city = $rq->city;
        $adressfooter->country = $rq->country;

        $adressfooter->save();

        return redirect()->route('adressfooters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adressfooter  $adressfooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adressfooter $adressfooter)
    {
        $adressfooter->delete();
        
        return redirect()->back();
    }
}
