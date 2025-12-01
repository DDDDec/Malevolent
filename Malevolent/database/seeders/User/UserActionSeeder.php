<?php

namespace Database\Seeders\User;

use App\Models\User\UserAction;
use Illuminate\Database\Seeder;

class UserActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userActions = config('malevolent.seeders.user-action', []);

        if (empty($userActions)) {
            $this->command->warn('No user actions found in \'config/malevolent/seeder.php\'');
            return;
        }

        foreach ($userActions as $userAction) {
            UserAction::create($userAction);
        }
    }
}
