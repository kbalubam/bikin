<?php

namespace App\Http\Controllers;

use App\Models\Usefullinkfooter;
use Illuminate\Http\Request;

class UsefullinkfooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usefullinks = Usefullinkfooter::all();
        return view('back.usefullink.allUsefullink',compact('usefullinks'));
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
     * @param  \App\Models\Usefullinkfooter  $usefullinkfooter
     * @return \Illuminate\Http\Response
     */
    public function show(Usefullinkfooter $usefullinkfooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usefullinkfooter  $usefullinkfooter
     * @return \Illuminate\Http\Response
     */
    public function edit(Usefullinkfooter $usefullinkfooter)
    {
        // $usefullinkfooter = Usefullinkfooter::find($id);
        return view('back.usefullink.edit',compact('usefullinkfooter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usefullinkfooter  $usefullinkfooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Usefullinkfooter $usefullinkfooter)
    {
        $rq->validate([
            "name"=>["required"],
            "link"=>["required"],
        ]);
        $usefullinkfooter->name = $rq->name;
        $usefullinkfooter->link = $rq->link;
        $usefullinkfooter->save();

        return redirect()->route('usefullinks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usefullinkfooter  $usefullinkfooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usefullinkfooter $usefullinkfooter)
    {
        $usefullinkfooter->delete();
        return redirect()->back();
    }
}
