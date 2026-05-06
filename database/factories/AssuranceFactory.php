<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assurance>
 */
class AssuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "libelle" => $this->faker->word(),
            "montant" => $this->faker->randomFloat(),
            "bonus" => $this->faker->numberBetween(0,100),
            "image" => "images/iage.png",
            "type_id" => Type::factory(),
        ];
    }
}
