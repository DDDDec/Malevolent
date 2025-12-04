<?php

namespace App\Livewire\Account;

use App\Models\User\User;
use Livewire\Component;

class Achievements extends Component
{
    public array $achievements = [];

    public function mount(): void
    {
        $this->loadAchievements();
    }

    public function poll(): void
    {
        $this->loadAchievements();
        $this->dispatch('achievements-updated');
    }

    private function loadAchievements(): void
    {
        $this->achievements = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.account.achievements');
    }
}
