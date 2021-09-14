<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view("backoffice.equipes.all",compact("equipes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        return view ("backoffice.equipes.create", compact("continents"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipe = new Equipe();
        $equipe -> nom = $request->nom;
        $equipe -> ville = $request->ville;
        $equipe -> pays = $request->pays;
        $equipe -> max = $request->max;
        $equipe-> continent_id  = $request-> continent_id;
        $equipe-> image = $request->file("image")->hashName();
        $request-> file("image")->storePublicly("img","public");

        $equipe-> save();
        return redirect()->route("equipes.index")->with('message','Vous avez bien ajouté une nouvelle equipe :' . $equipe->equipe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view("backoffice.equipes.show",compact("equipe"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $continents = Continent::all();

        return view("backoffice.equipes.edit",compact("equipe","continents"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $equipe = new Equipe();
        $equipe -> nom = $request->nom;
        $equipe -> ville = $request->ville;
        $equipe -> pays = $request->pays;
        $equipe -> max = $request->max;
        $equipe-> continent_id  = $request-> continent_id;

        $equipe-> save();
        return redirect()->route("equipes.index")->with('message',"Vous avez bien modifié  l'equipe :" . $equipe->equipe);
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        Storage::disk('public')->delete('img/' . $equipe->image);

        return redirect()->back();
    }
}
