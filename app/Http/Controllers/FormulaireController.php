<?php

namespace App\Http\Controllers;

use App\Formulaire;
use App\Mail\FormulaireMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulaires = Formulaire::all();
        return view('formulaire.viewFormulaire',compact('formulaires'));
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
        $formulaire = new Formulaire();
        $formulaire->nom = $request->input('nom');
        $formulaire->email = $request->input('email');
        $formulaire->sujet = $request->input('sujet');
        $formulaire->message = $request->input('message');
        $formulaire->save();

        Mail::to($formulaire->email)->send(new FormulaireMail($formulaire));
        return redirect('/#contact')->with('success','Votre message a bien été envoyé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function show(Formulaire $formulaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulaire $formulaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulaire $formulaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulaire $formulaire)
    {
        $formulaire->delete();
        return redirect()->route('formulaire.index');
    }
}
