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
            // 'user_id' => User::factory(),
            'user_id' => User::where('role', 'pemilik_hotel')->inRandomOrder()->first()->id,
            'name' => fake()->company(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'province' => fake()->randomElement(['Jawa barat', 'Jawa timur', 'Jawa tengah', 'Banten', 'Jakarta', 'Yogyakarta']),
            'description' => fake()->paragraph(),
            'thumbnail' => fake()->bothify('##??-##-??####-?#?#?') . '.' . fake()->randomElement(['png', 'jpg', 'jpeg', 'web']),
            // 'thumbnail' => 'hotels/' . fake()->image('public/storage/hotels', 640, 480, null, false),
        ];
    }
}
