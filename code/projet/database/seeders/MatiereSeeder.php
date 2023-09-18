<?php

namespace Database\Seeders;

use App\Models\Matiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matiere::factory() #Ne pas oublier d'indiquer le chemin de la classe "Classe" (en l'occurence) avec use... Bien utiliser "Classe" et non "ClasseSeeder" ou "ClasseFactory" car elle est la seule qui possède "HasFactory".
            ->count(5)
            ->create();
    }
}
