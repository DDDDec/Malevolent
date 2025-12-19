<?php

namespace App\Livewire\Community;

use App\Models\Server\Server;
use App\Models\User\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class StatsLeaderboard extends Component
{
    public string $selectedStatistic = 'user_kills';
    public Collection $statsLeaderboards;

    public function mount(): void
    {
        $this->loadStatsLeaderboards();
    }

    public function updatedSelectedStatistic(): void
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
        $this->statsLeaderboards = Cache::remember('statistic.leaderboards.'.$this->selectedStatistic, 300, function () {
            return User::query()
                ->orderByDesc($this->selectedStatistic)
                ->limit(10)
                ->get();
        });
    }

    public function render()
    {
        return view('livewire.community.stats-leaderboard');
    }
}
