<?php

namespace App\Http\Controllers;

use App\Models\Soustitrefooter;
use Illuminate\Http\Request;

class SoustitrefooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       public function store(Request $rq)
    {
     $rq->validate([
            "intitlue"=>["required"],

        ]);
        $soustitrefooter = new Soustitrefooter;
        $soustitrefooter->intitule = $rq->intitule;
        $soustitrefooter->save();

        return redirect()->route('soustitrefooters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soustitrefooter  $soustitrefooter
     * @return \Illuminate\Http\Response
     */
    public function show(Soustitrefooter $soustitrefooter)
    {
        return view('back.soustitrefooter.show',compact('soustitrefooter'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soustitrefooter  $soustitrefooter
     * @return \Illuminate\Http\Response
     */
    public function edit(Soustitrefooter $soustitrefooter)
    {
        return view('back.soustitrefooter.edit',compact('soustitrefooter'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soustitrefooter  $soustitrefooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Soustitrefooter $soustitrefooter)
    {
     $rq->validate([
            "intitule"=>["required"],

        ]);
        $soustitrefooter->intitule = $rq->intitule;
        $soustitrefooter->save();

        return redirect()->route('soustitrefooters.show',$soustitrefooter->id);
    }

}
