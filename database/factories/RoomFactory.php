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
        $hotel = Hotel::inRandomOrder()->first();
        return [
            // 'hotel_id' => Hotel::factory(),
            'hotel_id' => $hotel->id,
            'room_type' => fake()->randomElement(['standard', 'deluxe', 'suite']),
            'price' => fake()->randomFloat(2, 400),
            'capacity' => fake()->numberBetween(1, 10),
            'stock' => fake()->numberBetween(1, 10),
            // 'facilities' => fake()->sentence(),
            'facilities' => json_encode([
                'AC' => true,
                'TV' => fake()->boolean(),
                'Wifi' => true,
                'Breakfast' => fake()->boolean(),
            ]),
            'photo' => fake()->imageUrl(),
        ];
    }
}
