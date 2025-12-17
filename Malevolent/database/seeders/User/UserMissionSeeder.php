<?php

namespace Database\Seeders\User;

use App\Models\User\UserMission;
use Illuminate\Database\Seeder;

class UserMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missions = config('malevolent.seeders.mission', []);

        if (empty($missions)) {
            $this->command->warn('No missions found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($missions as $mission) {
            UserMission::create($mission);
        }
    }
}
