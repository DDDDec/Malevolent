<?php

namespace App\Livewire\Account;

use App\Models\User\User;
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
        $this->missions = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.account.missions');
    }
}
