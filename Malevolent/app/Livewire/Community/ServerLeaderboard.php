<?php

namespace App\Livewire\Community;

use Livewire\Component;

class ServerLeaderboard extends Component
{
    public array $serverLeaderboards = [];

    public function mount(): void
    {
        $this->loadServerLeaderboards();
    }

    public function poll(): void
    {
        $this->loadServerLeaderboards();
        $this->dispatch('server-leaderboards-updated');
    }

    private function loadServerLeaderboards(): void
    {

    }

    public function render()
    {
        return view('livewire.community.server-leaderboard');
    }
}
