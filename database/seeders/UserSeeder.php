<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // User::factory()->owner()->create();
        User::factory()->owner()->create([
            'name' => 'Muhammad Dawud Ibrahim',
            'email' => 'admin@example.com',
        ]);
    }
}
