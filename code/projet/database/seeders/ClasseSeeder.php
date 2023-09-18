<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classe;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classe::factory() #Ne pas oublier d'indiquer le chemin de la classe "Classe" (en l'occurence) avec use... Bien utiliser "Classe" et non "ClasseSeeder" ou "ClasseFactory" car elle est la seule qui possède "HasFactory".
            ->count(5)
            ->create();
    }
}
