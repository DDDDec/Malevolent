<?php

namespace Database\Seeders\Server;

use App\Models\Server\ServerAction;
use Illuminate\Database\Seeder;

class ServerActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serverActions = config('malevolent.seeders.serveraction', []);

        if (empty($serverActions)) {
            $this->command->warn('No server actions found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($serverActions as $serverAction) {
            ServerAction::create($serverAction);
        }
    }
}
