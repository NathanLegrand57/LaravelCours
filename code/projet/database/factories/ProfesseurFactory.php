<?php

namespace Database\Factories;

use App\Models\Matiere;
use App\Models\Professeur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professeur>
 */
class ProfesseurFactory extends Factory
{
    protected $model = Professeur::class;
    public function definition(): array
    {
        return [
            'nom'=>fake()->name(50),
            'prenom'=>fake()->name(50),
            'date_entree'=>fake()->date(),
            'matiere_id' => Matiere::factory()->create()
        ];
    }
}
