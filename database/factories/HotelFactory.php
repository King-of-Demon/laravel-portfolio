<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->word(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'province' => fake()->randomElement(['jawa barat', 'jawa timur', 'jawa tengah', 'Banten', 'Jakarta', 'Yogyakarta']),
            'description' => fake()->sentence(),
            'thumbnail' => fake()->bothify('##??-##-??####-?#?#?') . '.' . fake()->randomElement(['png', 'jpg', 'jpeg', 'web']),
        ];
    }
}
