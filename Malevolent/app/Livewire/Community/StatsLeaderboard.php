<?php

namespace App\Livewire\Community;

use Livewire\Component;

class StatsLeaderboard extends Component
{
    public array $statsLeaderboards = [];

    public function mount(): void
    {
        $this->loadStatsLeaderboards();
    }

    public function poll(): void
    {
        $this->loadStatsLeaderboards();
        $this->dispatch('stats-leaderboards-updated');
    }

    private function loadStatsLeaderboards(): void
    {

    }

    public function render()
    {
        return view('livewire.community.stats-leaderboard');
    }
}
