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
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'sku' => $this->faker->name,
            'category_id' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->sentence,
            'price'=>$this->faker->randomFloat(2,0,10000),
            'discount' => $this->faker->randomFloat(1,0,1),
            'published' => $this->faker->boolean,
            'quantity' => $this->faker->randomNumber(3),
        ];
    }
}
