<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
//Factoria de la tabla estudiantes
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->word(),
            'apellidos' => fake()->realText(),
            'dni' => fake()->realText(),
            'curso' => fake()->randomDigit(18, 30)
        ];
    }
}
