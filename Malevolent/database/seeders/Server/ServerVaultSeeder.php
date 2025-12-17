<?php

namespace Database\Seeders\Server;

use App\Models\Server\ServerVault;
use Illuminate\Database\Seeder;

class ServerVaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaults = config('malevolent.seeders.server-vault', []);

        if (empty($vaults)) {
            $this->command->warn('No server vaults found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($vaults as $vault) {
            ServerVault::create($vault);
        }
    }
}
