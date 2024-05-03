<?php

namespace Database\Seeders;

use App\Models\shipments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shipments::create([
            'name' => 'Regular',
            'base_price' => 10000,
            'variable_price' => 20000,
        ]);

        shipments::create([
            'name' => 'Next Day',
            'base_price' => 30000,
            'variable_price' => 50000,
        ]);

        shipments::create([
            'name' => 'Instant 3 Jam',
            'base_price' => 100000,
            'variable_price' => 500000,
        ]);

        Shipments::create([
            'name' => 'Same Day',
            'base_price' => 50000,
            'variable_price' => 100000,
        ]);

        Shipments::create([
            'name' => 'Cargo',
            'base_price' => 5000,
            'variable_price' => 10000,
        ]);
        //
    }
}
