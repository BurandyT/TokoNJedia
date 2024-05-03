<?php

namespace Database\Seeders;

use App\Models\locations;
use App\Models\merchants;
use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MerchantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $merchants = merchants::factory(3) ->create();

        foreach ($merchants as $merchant) {
            Locations::create([
                'city' => $faker->city,
                'country' => $faker->country,
                'address' => $faker->streetAddress,
                'notes' => $faker->text(50),
                'postal_code' => $faker->postcode,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'locationable_id' => $merchant->id,
                'locationable_type' => 'Merchant',
            ]);
        }
        //
    }
}
