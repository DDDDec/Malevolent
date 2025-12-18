<?php

namespace App\Livewire\Account\Profile;

use Livewire\Component;

class Statistics extends Component
{
    public array $statistics = [];

    public function mount(): void
    {

    }

    public function poll(): void
    {

    }

    private function loadStatistics(): void
    {

    }

    public function render()
    {
        return view('livewire.account.profile.statistics');
    }
}
