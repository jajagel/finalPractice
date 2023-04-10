<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prodname'=> fake()->lastName(),
            'quantity'=> fake()->numberBetween($min = 50, $max = 100),
            'price'=> fake()->numberBetween($min = 100, $max = 1000),
        ];
    }
}
