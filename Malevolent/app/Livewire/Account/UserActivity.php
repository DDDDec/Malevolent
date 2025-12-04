<?php

namespace App\Livewire\Account;

use App\Models\User\UserAction;
use Livewire\Component;

class UserActivity extends Component
{
    public array $userActivity = [];

    public function mount(): void
    {

    }

    public function poll(): void
    {

    }

    private function loadUserActivity(): void
    {

    }

    public function render()
    {
        return view('livewire.account.user-activity');
    }
}
