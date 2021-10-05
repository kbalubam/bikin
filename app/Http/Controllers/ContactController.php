<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Icon;
use App\Models\Titre;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        $titreContact = Titre::find(8);
        return view('back.contact.AllContact',compact('titreContact','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Icon::where('linksocial_id',null)->get();

        return view('back.contact.create',compact('icons'));
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
                "titre"=>["required"],
                "sousTitre"=>["required"],
                "icon_id"=>["required"],
        ]);

        $contact = new Contact;
        $contact->titre = $rq->titre;
        $contact->sousTitre = $rq->sousTitre;
        if($rq->infos != null) $contact->infos = $rq->infos;
        $contact->icon_id = $rq->icon_id;
        $contact->save();
        
        return redirect()->route('sectionsContact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $icons = Icon::where('linksocial_id',null)->get();

        return view('back.contact.edit',compact('icons','contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, Contact $contact)
    {
        $rq->validate([
                "titre"=>["required"],
                "sousTitre"=>["required"],
                "icon_id"=>["required"],
        ]);


        $contact->titre = $rq->titre;
        $contact->sousTitre = $rq->sousTitre;
        if($rq->infos != null) $contact->infos = $rq->infos;
        $contact->icon_id = $rq->icon_id;
        $contact->save();
        
        return redirect()->route('sectionsContact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
