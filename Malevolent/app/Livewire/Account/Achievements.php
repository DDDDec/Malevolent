<?php

namespace App\Livewire\Account;

use App\Models\Server\ServerAchievement;
use Illuminate\Support\Facades\Cache;
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
        $this->achievements = Cache::remember('profile.achievements', 300, function () {
            return ServerAchievement::all()->toArray();
        });
    }

    public function render()
    {
        return view('livewire.account.achievements');
    }
}
