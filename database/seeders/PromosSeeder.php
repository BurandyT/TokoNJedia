<?php

namespace Database\Seeders;

use App\Models\promos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        promos::create([
            'promo_name' => "New Year’s Sale",
            'promo_image' => 'assets/images/promos/year-end.png',
            'promo_description' => "New Year's Sale up to 70% off. Sale ends at 4th January.",
        ]);

        Promos::create([
            'promo_name' => "Santa’s Surprise",
            'promo_image' => 'assets/images/promos/christmas-sale.png',
            'promo_description' => "Christmas Sale up to 50% off. Sale ends at 31th December.",
        ]);

        Promos::create([
            'promo_name' => "Driver’s Night",
            'promo_image' => 'assets/images/promos/driving-promo.jpg',
            'promo_description' => "Sale on driving products.",
        ]);

        Promos::create([
            'promo_name' => "Super Sale",
            'promo_image' => 'assets/images/promos/super-sale.png',
            'promo_description' => "Sale up to 75% off, limited time only.",
        ]);

        Promos::create([
            'promo_name' => "PB's Magical Blessing",
            'promo_image' => 'assets/images/promos/pb-promo.jpg',
            'promo_description' => "Up to 100% off.",
        ]);

        Promos::factory()->count(5)->create();
        //
    }
}
