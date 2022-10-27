<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'short_description' =>$this->faker->sentence,
            'long_description' =>$this->faker->sentence,
            'enabled'=>$this->faker->boolean,
            'published'=>$this->faker->boolean
        ];
    }
}
