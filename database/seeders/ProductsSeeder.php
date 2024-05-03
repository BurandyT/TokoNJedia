<?php

namespace Database\Seeders;

use App\Models\merchants;
use App\Models\product_categories;
use App\Models\product_images;
use App\Models\product_variants;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::factory(30)->create()->each(function ($product) {
            $this->generateProductImage($product->id);
            $this->generateProductVariant($product->id);
        });

    }

    private function generateProductImage($productId)
    {
        $faker = Faker::create();

        product_images::create([
            'product_id' => $productId,
            'image' => $faker->imageUrl(),
        ]);
    }

    private function generateProductVariant($productId)
    {
        $faker = Faker::create();

        product_variants::create([
            'product_id' => $productId,
            'name' => $faker->word,
            'stock' => $faker->randomNumber(2),
            'price' => $faker->randomNumber(4),
        ]);
        //
    }
}
