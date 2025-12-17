<?php

namespace Database\Seeders\Server;

use App\Models\Server\ServerMission;
use Illuminate\Database\Seeder;

class ServerMissionSeeder extends Seeder
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
            ServerMission::create($mission);
        }
    }
}
