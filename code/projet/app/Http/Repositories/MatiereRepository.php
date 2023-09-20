<?php

namespace App\Http\Repositories;

use App\Models\Matiere;

class MatiereRepository
{
    protected $matiere;
    public function __construct(Matiere $matiere)
    {
        $this->matiere = $matiere;
    }

    private function save(Matiere $matiere, array $inputs)
    {
        $matiere->libelle = $inputs['libelle'];
        $matiere->niveau = $inputs['niveau'];

        $matiere->save();
        return $matiere;
    }

    public function store(array $inputs)
    {
        $matiere = new $this->matiere;
        return $this->save($matiere, $inputs);
    }

    public function update(Matiere $matiere, array $inputs)
    {
        return $this->save($matiere, $inputs);
    }

    function getData(string $pattern = '')
    {
        return $pattern !== ''
            ? Matiere::where('libelle', 'like', '%' . $pattern . '%')
            : Matiere::all();
    }
}
