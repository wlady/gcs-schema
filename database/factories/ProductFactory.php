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
        $name = $this->faker->word();

        return [
            'name' => $name,
            'slug' => $name . '-' . $this->faker->unique()->slug(),
            'sku' => $name . '-' . $this->faker->unique()->buildingNumber(),
            'price' => $this->faker->numberBetween(1000, 99999) / 100,
        ];
    }
}
