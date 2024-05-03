<?php

namespace Database\Factories;

use App\Models\product_categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product_categories>
 */
class product_categoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = product_categories::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word
            //
        ];
    }
}

