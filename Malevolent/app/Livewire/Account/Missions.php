<?php

namespace App\Livewire\Account;

use App\Models\User\User;
use Livewire\Component;

class Missions extends Component
{
    public array $missions = [];

    public function mount(): void
    {

    }

    public function poll(): void
    {

    }

    private function loadMissions(): void
    {

    }

    public function render()
    {
        return view('livewire.account.missions');
    }
}
