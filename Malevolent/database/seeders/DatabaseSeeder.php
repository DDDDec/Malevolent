<?php

namespace Database\Seeders;

use Database\Seeders\Server\ServerAchievementSeeder;
use Database\Seeders\Server\ServerActionSeeder;
use Database\Seeders\Server\ServerLeaderboardSeeder;
use Database\Seeders\Server\ServerMissionSeeder;
use Database\Seeders\Server\ServerSeeder;
use Database\Seeders\Server\ServerVaultSeeder;
use Database\Seeders\User\UserActionSeeder;
use Database\Seeders\User\UserPlutoniumSeeder;
use Database\Seeders\User\UserSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            UserPlutoniumSeeder::class,
            UserActionSeeder::class,
            ServerAchievementSeeder::class,
            ServerSeeder::class,
            ServerLeaderboardSeeder::class,
            ServerMissionSeeder::class,
            ServerActionSeeder::class,
            ServerVaultSeeder::class,
        ]);
    }
}
