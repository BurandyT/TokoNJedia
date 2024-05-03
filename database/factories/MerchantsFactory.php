<?php

namespace Database\Factories;

use App\Models\merchants;
use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchants>
 */
class MerchantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = merchants::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();
        $userIds = users::inRandomOrder()->distinct()->pluck('id')->toArray();

        $userId = $faker->randomElement($userIds);

        return [
            'user_id' => $userId,
            'name' => $faker->name,
            'phone' => $faker->phoneNumber,
            'status' => 'active',
            'image' => 'https://source.unsplash.com/random',
            'banner_image' => 'https://source.unsplash.com/random',
            'description' => $faker->text(50),
            'catch_phrase' => $faker->sentence(10),
            'process_time' => $faker->text(10),
            'operational_time' => $faker->text(10),
            'full_description' => $faker->paragraphs(18, true)
            //
        ];
    }
}
