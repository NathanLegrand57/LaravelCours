<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Classe::all()->count());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classe = new Classe();
        $classe->batiment = 'Bâtiment A';
        $classe->prenom = 'Patrick';
        $classe->numero = '123';
        $classe->nombre_places = '321';

        $classe->save();

        // return redirect()->route('classe.index'); # classe.index se voit dans le cmd avec artisant route:list


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
    public function show(Classe $classe)
    {
        dd($classe->numero); # Permet de montrer les informations correspondantes à l'id dans la bdd (ici avec ->prenom ne montre que le prénomcorrespondant à l'id)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        $classe->prenom = 'Edit';
        $classe->save();
        dd($classe->prenom);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
    {
        // $classe->batiment = 'Bâtiment A';
        // $classe->prenom = 'Patrick';
        // $classe->numero = '123';
        // $classe->nombre_places = '321';

        // $classe->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
        //
    }

    // function toto(Classe $classe) {
    //     $classe->nombre_places +=2;
    //     dd($classe->nombre_places);

    // }
}
