<?php

namespace Database\Seeders;

use App\Models\product_images;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Products::pluck('id')->toArray();

        for ($i = 0; $i < 15; $i++) {
            product_images::factory()->create([
                'product_id' => array_rand($products),
            ]);
        }
        //
    }
}
