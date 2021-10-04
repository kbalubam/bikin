<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Linksocial;
use Illuminate\Http\Request;

class LinksocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linksocials = Linksocial::all();
        return view('back.linksocial.allLinksocial',compact('linksocials'));
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
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function show(Linksocial $linksocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function edit(Linksocial $linksocial)
    {
        
        $icons = Icon::where('linksocial_id','!=',null)->get();

        return view('back.linksocial.edit',compact('linksocial','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Linksocial $linksocial)
    {
        $rq->validate([
            "name"=>["required"],
            "link"=>["required"],
        ]);

        $linksocial->name = $rq->name;
        $linksocial->link = $rq->link;

        $linksocial->save();

        return redirect()->route('linksocials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linksocial  $linksocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linksocial $linksocial)
    {
        //
    }
}
