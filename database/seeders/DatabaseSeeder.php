<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UsersTableSeeder::class,
            AchievementRequiresTableSeeder::class,
            AchievementsTableSeeder::class,
            CaptionLvsTableSeeder::class,
            GiftcodesTableSeeder::class,
            ImagesTableSeeder::class,
            ItemOptionsTableSeeder::class,
            PartsTableSeeder::class,
            ItemsTableSeeder::class,
            MapsTableSeeder::class,
            PlayersTableSeeder::class,
        ]);
    }
}
