<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($this->faker));
        
        return [
            'title' => $this->faker->foodname(),
            'description' => $this->faker->realText($maxNbChars = 155, $indexSize = 2),
            'price' => $this->faker->numberBetween($min=5, $max=20),
            'photo' => $this->faker->imageUrl,
        ];
    }
}
