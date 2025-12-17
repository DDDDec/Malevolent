<?php

namespace App\Livewire\Account;

use App\Models\Server\ServerMission;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Missions extends Component
{
    public array $missions = [];

    public function mount(): void
    {
        $this->loadMissions();
    }

    public function poll(): void
    {
        $this->loadMissions();
        $this->dispatch('missions-updated');
    }

    private function loadMissions(): void
    {
        $this->missions = Cache::remember('profile.missions', 300, function () {
            return ServerMission::all()->toArray();
        });
    }

    public function render()
    {
        return view('livewire.account.missions');
    }
}
