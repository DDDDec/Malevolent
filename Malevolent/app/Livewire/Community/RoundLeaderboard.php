<?php

namespace App\Livewire\Community;

use Livewire\Component;

class RoundLeaderboard extends Component
{
    public array $roundLeaderboards = [];

    public function mount(): void
    {
        $this->loadRoundLeaderboards();
    }

    public function poll(): void
    {
        $this->loadRoundLeaderboards();
        $this->dispatch('round-leaderboards-updated');
    }

    private function loadRoundLeaderboards(): void
    {

    }

    public function render()
    {
        return view('livewire.community.round-leaderboard');
    }
}
