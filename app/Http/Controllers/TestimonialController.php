<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Titre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titreTestimonials = Titre::find(6);

        $testimonials = Testimonial::all();
        return view('back.testimonial.allTestimonial', compact('testimonials','titreTestimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.testimonial.create');
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
            "description"=>['required'],
            "image"=>['required'],
            "nom"=>['required'],
            "poste"=>['required'],
        ]);
        $testimonial = new Testimonial;
        $testimonial->description = $request->description;
        $testimonial->poste = $request->poste;
        $testimonial->nom = $request->nom;
        $testimonial->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img/testimonials/','public');
        $testimonial->save();
        return redirect()->route('sectionsTestimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('back.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            "description"=>['required'],
            "nom"=>['required'],
            "poste"=>['required'],
        ]);
        if($request->file('image') !== null){

            Storage::disk('public')->delete('img/testimonials/'.$testimonial->image);
            $testimonial->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img/testimonials/','public');
        }

        $testimonial->description = $request->description;
        $testimonial->poste = $request->poste;
        $testimonial->nom = $request->nom;
        $testimonial->save();
        return redirect()->route('sectionsTestimonial');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize('user_admin');
        $this->authorize('user_webmaster');
        $testimonial->delete();
        return redirect()->route('teams.index');
    }
}
