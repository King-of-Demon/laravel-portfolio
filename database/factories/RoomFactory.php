<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'room_type' => fake()->randomElement(['standard', 'deluxe', 'suiite']),
            'price' => fake()->randomFloat(2, 400),
            'capacity' => fake()->numberBetween(1, 10),
            'stock' => fake()->numberBetween(1, 10),
            'facilities' => fake()->sentence(),
            'photo' => fake()->imageUrl(),
        ];
    }
}
