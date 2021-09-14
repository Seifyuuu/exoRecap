<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Equipe;
use App\Models\Role;
use App\Models\Continent;


use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs= Joueur::all();
        return view("backoffice.joueurs.all",compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("backoffice.joueurs.create", compact('roles', 'equipes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joueur = new Joueur();
        $joueur-> nom = $request-> nom;
        $joueur-> prenom = $request-> prenom;
        $joueur-> age = $request-> age;
        $joueur-> numero = $request-> numero;
        $joueur->genre = $request-> genre;
        $joueur-> role_id = $request-> role_id;
        $joueur-> equipe_id = $request-> equipe_id;
        $joueur->save();

        return redirect()->route("joueurs.index")->with('message','Vous avez bien ajouté un nouveau joueur :' . $joueur->nom ." ". $joueur->prenom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view("backoffice.joueurs.show", compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("backoffice.joueurs.edit", compact('roles', 'equipes','joueur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $joueur-> nom = $request-> nom;
        $joueur-> prenom = $request-> prenom;
        $joueur-> age = $request-> age;
        $joueur-> numero = $request-> numero;
        $joueur-> genre = $request-> genre;
        $joueur->save();    
        return redirect()->route("joueurs.index")->with('message','Vous avez bien modifié le  joueur :' . $joueur->nom ." ". $joueur->prenom);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
        return redirect()->back();
    }
}
