<?php

namespace Database\Factories;

use App\Models\merchants;
use App\Models\product_categories;
use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = products::class;

    public function definition()
    {
        $merchantId = merchants::inRandomOrder()->first()->id;
        $categoryId = product_categories::inRandomOrder()->first()->id;
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->realText(),
            'condition' => $this->faker->randomElement(['New', 'Used']),
            'merchant_id' => $merchantId,
            'product_category_id' => $categoryId
            //
        ];
    }
}
