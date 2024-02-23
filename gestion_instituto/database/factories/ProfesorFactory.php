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
           'nombre' => fake()->name(),
           'apellido' => fake()->lastname(),
           'email' => fake()->unique()->safeEmail(),
           'departamento' => fake()->randomElement($departamento),
        ];
    }
}
