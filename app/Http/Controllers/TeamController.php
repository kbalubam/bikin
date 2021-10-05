<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $titreTeam = Titre::find(7);
        $teams  = Team::all();
        return view('back.team.allTeam',compact('titreTeam','teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.team.create');
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
            "image"=>['required'],
            "nom"=>['required'],
            "poste"=>['required'],
        ]);
        $team =new Team;
        $team->image = $request->file('image')->hashName();
        $team->nom = $request->nom;
        $team->poste = $request->poste;
        $request->file('image')->storePublicly('img/team/', 'public');
        $team->save();
        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('back.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {

    return view('back.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            "nom"=>['required'],
            "poste"=>['required'],
        ]);
        if($request->file('image') !== null){
            Storage::disk('public')->delete('img/team/'.$team->image);
            $team->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img/team/', 'public');
        }
        $team->nom = $request->nom;
        $team->poste = $request->poste;
        $team->save();
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index');
    }
}
