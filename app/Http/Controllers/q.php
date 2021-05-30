<?php

namespace App\Http\Controllers;

use App\Models\Ar\ArCommande;
use App\Models\Fr\FrCommande;
use App\Models\En\EnCommande;

use Illuminate\Http\Request;

class FrCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmArabe=ArCommande::get();
        $cmFrench=FrCommande::get();
        $cmEnglish=EnCommande::get();

        
        // echo($cm);
       // dd($cm);
        return view('commande.details',compact([
            'cmArabe', 
            'cmFrench', 
            'cmEnglish', 
            ]));
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
     * @param  \App\Models\Fr\Fr_commande  $fr_commande
     * @return \Illuminate\Http\Response
     */
    public function show(Fr_commande $fr_commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fr\Fr_commande  $fr_commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Fr_commande $fr_commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fr\Fr_commande  $fr_commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fr_commande $fr_commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fr\Fr_commande  $fr_commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fr_commande $fr_commande)
    {
        //
    }
}
