<?php

namespace Database\Factories;

use App\Models\flash_sale_products;
use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Flash_Sale_ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = flash_sale_products::class;

    public function definition()
    {
        return [
            'product_id' => Products::inRandomOrder()->first()->id,
            'discount' => $this->faker->numberBetween(50, 100),
            'created_at' => now(),
            'updated_at' => now()
            //
        ];
    }
}
