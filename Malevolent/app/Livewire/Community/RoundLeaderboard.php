<?php

namespace App\Livewire\Community;

use Illuminate\Support\Collection;
use App\Models\Server\ServerLeaderboard;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class RoundLeaderboard extends Component
{
    public string $selectedMap = 'Tranzit';
    public Collection $roundLeaderboards;

    public function mount(): void
    {
        $this->loadRoundLeaderboards();
    }

    public function updatedSelectedMap(): void
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
        $this->roundLeaderboards = Cache::remember('round.leaderboards.'.$this->selectedMap, 300, function () {
            return ServerLeaderboard::query()
                ->where('server_map', $this->selectedMap)
                ->orderByDesc('server_round')
                ->limit(10)
                ->get();
        });
    }

    public function render()
    {
        return view('livewire.community.round-leaderboard');
    }
}
