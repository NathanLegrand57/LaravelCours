<?php

namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matiere>
 */
class MatiereFactory extends Factory
{
    protected $model = Matiere::class;
    public function definition(): array
    {
        return [
            'libellé' => fake()->name(50), #Possible d'utiliser $this->faker->name ou fake()->name()
            'niveau' => 10,
        ];
    }
}
