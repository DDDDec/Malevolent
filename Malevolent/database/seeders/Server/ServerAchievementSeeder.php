<?php

namespace Database\Seeders\Server;

use App\Models\Server\ServerAchievement;
use Illuminate\Database\Seeder;

class ServerAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = config('malevolent.seeders.achievement', []);

        if (empty($achievements)) {
            $this->command->warn('No achievements found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($achievements as $achievement) {
            ServerAchievement::create($achievement);
        }
    }
}
