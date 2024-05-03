<?php

namespace Database\Seeders;

use App\Models\flash_sale_products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class FlashSaleProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        flash_sale_products::factory()->count(5)->create();
        //
    }
}
