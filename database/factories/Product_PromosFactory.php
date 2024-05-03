<?php

namespace Database\Factories;

use App\Models\product_promos;
use App\Models\products;
use App\Models\promos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_Promos>
 */
class Product_PromosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = product_promos::class;


    public function definition()
    {
        return [
            'promo_id' => promos::inRandomOrder()->first()->id,
            'product_id' => products::inRandomOrder()->first()->id,
            'discount' => $this->faker->numberBetween(25, 75)
            //
        ];
    }
}
