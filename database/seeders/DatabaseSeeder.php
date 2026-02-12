<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1️⃣ Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password123'), // optional: set default password
        ]);

        // 2️⃣ Seed all services
        $this->call([
            ServiceSeeder::class,
            TestimonialSeeder::class,
            GallerySeeder::class,
            FaqSeeder::class,

        ]);
    }
}
