<?php

namespace Database\Seeders\User;

use App\Models\User\UserAchievement;
use Illuminate\Database\Seeder;

class UserAchievementSeeder extends Seeder
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
            UserAchievement::create($achievement);
        }
    }
}
