<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $allPort = Portfolio::all();
        return view('back.portfolio.allPortfolio', compact('allPort'));
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
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('back.portfolio.edit', compact('$portfolio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            "img"=>['required'],
            "soustitre"=>['required'],
            "soustitre2"=>['required'],
            "lien"=>['required'],
        ]);
        Storage::disk('public')->delete('img/'.$portfolio->image);
        $portfolio->img = $request->img;
        $portfolio->soustitre = $request->soustitre;
        $request->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img', 'public');
        $portfolio->soustitre2 = $request->soustitre2;
        $portfolio->lien = $request->lien;
        $portfolio->save();
        return redirect()->route('navbars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('navbars.index');
    }
}
