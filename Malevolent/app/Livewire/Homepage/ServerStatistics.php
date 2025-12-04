<?php

namespace App\Livewire\Homepage;

use App\Models\User\User;
use Livewire\Component;

class ServerStatistics extends Component
{
    public array $statistics = [];

    public function mount(): void
    {
        $this->loadStatistics();
    }

    public function poll(): void
    {
        $this->loadStatistics();
        $this->dispatch('statistics-updated');
    }

    private function loadStatistics(): void
    {
        $this->statistics = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.homepage.server-statistics');
    }
}
