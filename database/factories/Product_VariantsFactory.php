<?php

namespace Database\Factories;

use App\Models\product_variants;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_Variants>
 */
class Product_VariantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = product_variants::class;

    public function definition()
    {
        return [
            'product_id' => \App\Models\Products::factory(),
            'name' => $this->faker->word,
            'price' => $this->faker->numberBetween(1000, 100000),
            'stock' => $this->faker->numberBetween(0, 20)
            //
        ];
    }
}
