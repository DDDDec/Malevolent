<?php

namespace Database\Seeders\Server;

use App\Models\Server\Server;
use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servers = config('malevolent.seeders.server', []);

        if (empty($servers)) {
            $this->command->warn('No servers found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($servers as $server) {
            Server::create($server);
        }
    }
}
