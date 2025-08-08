<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hotel;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1)->owner()->recycle([Hotel::factory()->create(), Room::factory(5)->create()])->owner()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
                    'name' => 'Muhammad Dawud Ibrahim',
                    'email' => 'muhammaddawud5410@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'role' => 'admin',
                    'remember_token' => Str::random(10),
        ]);

        $pemilikHotel = User::factory()->count(5)->create([
            'role' => 'pemilik_hotel'
        ]);

        User::factory()->count(20)->create([
            'role' => 'penyewa'
        ]);

        Hotel::factory()->count(10)->recycle($pemilikHotel)->create();

        $this->call([
            UserSeeder::class,
            RoomSeeder::class,
            HotelSeeder::class,
            BookingSeeder::class,
            PaymentSeeder::class,
        ]);

        // Hotel::factory(2)->recycle([
        //     User::all(),
        //     Room::all(),
        // ])->create();
    }
}
