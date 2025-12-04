<?php

namespace App\Livewire\Account;

use App\Models\User\UserAction;
use Livewire\Component;

class UserActivity extends Component
{
    public array $userActivity = [];

    public function mount(): void
    {
        $this->loadUserActivity();
    }

    public function poll(): void
    {
        $this->loadUserActivity();
        $this->dispatch('recently-played-updated');
    }

    private function loadUserActivity(): void
    {
        $this->userActivity = UserAction::all()->toArray();
    }

    public function render()
    {
        return view('livewire.account.user-activity');
    }
}
