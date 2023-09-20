<?php

namespace App\Http\Repositories;

use App\Models\Professeur;

class ProfesseurRepository
{
    protected $professeur;
    public function __construct(Professeur $professeur)
    {
        $this->professeur = $professeur;
    }

    private function save(Professeur $professeur, array $inputs)
    {
        $professeur->nom = $inputs['nom'];
        $professeur->prenom = $inputs['prenom'];
        $professeur->date_entree = $inputs['date_entree'];
        $professeur->matiere_id = $inputs['matiere_id'];

        $professeur->save();
        return $professeur;
    }

    public function store(array $inputs)
    {
        $professeur = new $this->professeur;
        return $this->save($professeur, $inputs);
    }

    public function update(Professeur $professeur, array $inputs)
    {
        return $this->save($professeur, $inputs);
    }

    function getData(string $pattern = '')
    {
        return $pattern !== ''
            ? Professeur::where('libelle', 'like', '%' . $pattern . '%')
            : Professeur::all();
    }
}
