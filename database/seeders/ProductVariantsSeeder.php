<?php

namespace Database\Seeders;

use App\Models\product_variants;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product_variants::factory()->count(30)->create();
        //
    }
}
