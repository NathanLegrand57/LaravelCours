<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        $date = Carbon::parse($professeur->date_entree);
        $retraite = false;
        if ($date->year < 1980) {
            $retraite = true;
        }

        return view('professeur.show', compact('professeur', 'retraite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {
        //
    }

    /**
     * Restore the specified resource from storage.
     */
    public function undelete(Professeur $professeur)
    {
        //
    }
}
