<?php

namespace Database\Seeders\Server;

use App\Models\Server\ServerLeaderboard;
use Illuminate\Database\Seeder;

class ServerLeaderboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serverLeaderboards = config('malevolent.seeders.server-leaderboard', []);

        if (empty($serverLeaderboards)) {
            $this->command->warn('No server leaderboards found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($serverLeaderboards as $serverLeaderboard) {
            ServerLeaderboard::create($serverLeaderboard);
        }
    }
}
