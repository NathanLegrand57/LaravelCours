<?php

namespace App\Http\Controllers;

use App\Http\Repositories\MatiereRepository;
use App\Http\Requests\MatiereRequest;
use App\Models\Matiere;
use Auth;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    private $repository;

    public function __construct(MatiereRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matieres = $this->repository->getData();
        return view('matiere.index', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->can('matiere-create')) {
            return view('matiere.create');
        }

        abort(401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatiereRequest $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('matiere.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matiere $matiere)
    {
        return view('matiere.show', compact('matiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matiere $matiere)
    {
        if (Auth::user()->can('matiere-update')) {
            return view('matiere.edit', compact('matiere'));
        }

        abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatiereRequest $request, Matiere $matiere)
    {
        $this->repository->update($matiere, $request->all());

        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matiere $matiere)
    {
        //
    }

    /**
     * Restore the specified resource from storage.
     */
    public function undelete(Matiere $matiere)
    {
        //
    }
}
