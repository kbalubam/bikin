<?php

namespace App\Http\Controllers;

use App\Models\Infosfooter;
use Illuminate\Http\Request;

class InfosfooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infosfooters = Infosfooter::all();
        return view('back.infosfooter.allSectionInfosfooter',compact('infosfooters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.infosfooter.create');
        
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
            "intitule"=>["required"],
            "donnee"=>["required"],
        ]);
        $infosfooter = new Infosfooter;
        $infosfooter->intitule = $rq->intitule;
        $infosfooter->donnee = $rq->donnee;

        $infosfooter->save();

        return redirect()->route('infosfooters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infosfooter  $infosfooter
     * @return \Illuminate\Http\Response
     */
    public function show(Infosfooter $infosfooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infosfooter  $infosfooter
     * @return \Illuminate\Http\Response
     */
    public function edit(Infosfooter $infosfooter)
    {
        return view('back.infosfooter.edit',compact('infosfooter'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infosfooter  $infosfooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Infosfooter $infosfooter)
    {
        $rq->validate([
            "intitule"=>["required"],
            "donnee"=>["required"],
        ]);
        $infosfooter->intitule = $rq->intitule;
        $infosfooter->donnee = $rq->donnee;

        $infosfooter->save();

        return redirect()->route('infosfooters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infosfooter  $infosfooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infosfooter $infosfooter)
    {
        $infosfooter->delete();

        return redirect()->back();
    }
}
