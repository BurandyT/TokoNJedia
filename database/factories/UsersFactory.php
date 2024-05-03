<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = users::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make($this->faker->password),
            'phone' => $this->faker->phoneNumber,
            'dob' => $this->faker->date,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'image' => $this->faker->imageUrl(),
            'google_id' => $this->faker->uuid,
            //
        ];
    }
}
