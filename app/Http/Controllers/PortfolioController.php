<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Titre;
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
    
    {   
        $portfolio = Portfolio::all();
        $titrePortfolio = Titre::find(5);
        return view('back.portfolio.allPortfolio', compact('portfolio','titrePortfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "img"=>['required'],
            "soustitre"=>['required'],
            "soustitre2"=>['required'],
            "lien"=>['required'],
        ]);
        $portfolio = new Portfolio;
        $portfolio->soustitre = $request->soustitre;
        $portfolio->soustitre2 = $request->soustitre;
        $portfolio->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img/portfolio/', 'public');
        $portfolio->soustitre2 = $request->soustitre2;
        $portfolio->lien = $request->lien;
        $portfolio->save();
        return redirect()->route('portfolios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('back.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('back.portfolio.edit', compact('portfolio'));

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
        Storage::disk('public')->delete('img/portfolio/'.$portfolio->img);
        $portfolio->soustitre = $request->soustitre;
        $portfolio->soustitre2 = $request->soustitre;
        $portfolio->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img/portfolio/', 'public');
        $portfolio->soustitre2 = $request->soustitre2;
        $portfolio->lien = $request->lien;
        $portfolio->save();
        return redirect()->route('portfolios.index');
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
        return redirect()->back();
    }
}
