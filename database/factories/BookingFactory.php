<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
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
            'room_id' => Room::factory(),
            'check_in_date' => fake()->date('d-m-Y'),
            'check_out_date' => fake()->date('d-m-Y'),
            'total_price' => fake()->randomFloat(2, 400),
            'status' => fake()->randomElement(['pending', 'confirmed', 'canceled', 'completed']),
        ];
    }
}
