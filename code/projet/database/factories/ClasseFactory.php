<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    protected $model = Classe::class;

    public function definition(): array
    {
        return [
            'prenom' => $this->faker->name, #Possible d'utiliser $this->faker->name ou fake()->name()
            'batiment' => $this->faker->text(5),
            'nombre_places' => 10,
            'numero' => 10,
        ];
    }
}
