<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departamento= ['Ingeniería', 'Administración','comercio'];
        return [
           'nombre' => $this->faker->name(),
           'apellido' => $this->faker->lastname(),
           'email' => $this->faker->unique()->safeEmail(),
           'departamento' => $this->faker()->andomElement($departamento),
        ];
    }
}
