<?php

namespace Database\Factories;

use App\Models\user_domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_domicilio>
 */
class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =user_domicilio::class;
    public function definition(): array
    {
        return [
            'domicilio'=>fake()->streetAddress(),
            'numero_exterior'=>fake()->numerify(),
            'colonia'=>fake()->country(),
            'cp'=>fake()->postcode(),
            'ciudad'=>fake()->country(),
            'updated_at'=> now(),
            'created_at'=> now(),
        ];
    }
}
