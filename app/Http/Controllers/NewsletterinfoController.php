<?php

namespace App\Http\Controllers;

use App\Models\Newsletterinfo;
use Illuminate\Http\Request;

class NewsletterinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletterinfos = Newsletterinfo::all();
        return view('back.newsletterinfo.allSectionNewsletterinfo',compact('newsletterinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.newsletterinfo.create');
        
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
            "description"=>["required"],
        ]);
        $newsletterinfo = new Newsletterinfo;
        $newsletterinfo->description = $rq->description;

        $newsletterinfo->save();

        return redirect()->route('newsletterinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletterinfo  $newsletterinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletterinfo $newsletterinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletterinfo  $newsletterinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletterinfo $newsletterinfo)
    {
        return view('back.newsletterinfo.edit',compact('newsletterinfo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletterinfo  $newsletterinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Newsletterinfo $newsletterinfo)
    {
        $rq->validate([
            "description"=>["required"],
        ]);
        $newsletterinfo->description = $rq->description;

        $newsletterinfo->save();

        return redirect()->route('newsletterinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletterinfo  $newsletterinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletterinfo $newsletterinfo)
    {
        $newsletterinfo->delete();

        return redirect()->back();
    }
}
