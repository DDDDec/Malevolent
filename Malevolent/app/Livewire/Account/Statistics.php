<?php

namespace App\Livewire\Account;

use App\Models\User\User;
use Livewire\Component;

class Statistics extends Component
{
    public array $statistics = [];

    public function mount(): void
    {
        $this->loadStatistics();
    }

    public function poll(): void
    {
        $this->loadStatistics();
        $this->dispatch('recently-played-updated');
    }

    private function loadStatistics(): void
    {
        $this->statistics = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.account.statistics');
    }
}
