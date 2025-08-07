<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'payment_method' => fake()->randomElement(['manual_transfer', 'cash', 'e_wallet', 'virtual_account']),
            'amount' => fake()->randomFloat(2, 400),
            'payment_status' => fake()->randomElement(['pending', 'paid', 'failed', 'refunded']),
            'proof_image' => fake()->imageUrl(),
        ];
    }
}
