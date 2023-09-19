<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    public function matiere(){
        return $this->belongsTo(Matiere::class);
    }

    function identite(bool $prenom_en_premier = true) : string {

        return $prenom_en_premier
        ? $this->prenom . ' ' . $this->nom
        : $this->nom . ' ' . $this->prenom;
    }
}
