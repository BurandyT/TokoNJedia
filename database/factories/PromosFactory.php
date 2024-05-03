<?php

namespace Database\Factories;

use App\Models\promos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promos>
 */
class PromosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = promos::class;

    public function definition()
    {
        return [
            'promo_name' => $this->faker->word,
            'promo_image' => $this->faker->imageUrl(),
            'promo_description' => $this->faker->sentence
            //
        ];
    }
}
