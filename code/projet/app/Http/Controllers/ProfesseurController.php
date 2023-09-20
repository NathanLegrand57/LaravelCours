<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProfesseurRepository;
use App\Http\Requests\ProfesseurRequest;
use App\Models\Matiere;
use App\Models\Professeur;
use Carbon\Carbon;

class ProfesseurController extends Controller
{
    private $repository;

    public function __construct(ProfesseurRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professeurs = Professeur::all();

        return view('professeur.index', compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matieres = Matiere::all();

        return view('professeur.create', compact('matieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfesseurRequest $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('professeur.index');
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
        $matieres = Matiere::all();

        return view('professeur.edit', compact('professeur', 'matieres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfesseurRequest $request, Professeur $professeur)
    {
        $this->repository->update($professeur, $request->all());

        return redirect()->route('professeur.index');
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
