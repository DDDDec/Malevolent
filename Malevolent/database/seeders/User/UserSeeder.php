<?php

namespace Database\Seeders\User;

use App\Models\User\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = config('malevolent.seeder.users', []);

        if (empty($users)) {
            $this->command->warn('No users found in malevolent/seeder.php');
            return;
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
