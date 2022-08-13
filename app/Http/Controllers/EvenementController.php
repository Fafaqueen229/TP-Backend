<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenement = Evenement::all();
        return view('liste', [
            'evenement$evenement' => $evenement
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->date_demarrage = $request->date_demarrage;
        $evenement->date_fin = $request->date_fin;
        $evenement->save();

        return redirect()->route('evenemen.index');
    }
}
