<?php

namespace Database\Factories;

use App\Models\locations;
use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locations>
 */
class LocationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = locations::class;

    public function definition()
    {
        return [
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'address' => $this->faker->streetAddress,
            'notes' => $this->faker->citySuffix,
            'postal_code' => $this->faker->postcode,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'locationable_type' => 'user',
            'locationable_id' => users::inRandomOrder()->first()->id
            //
        ];
    }
}
