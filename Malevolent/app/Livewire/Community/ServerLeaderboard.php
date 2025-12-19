<?php

namespace App\Livewire\Community;

use App\Models\Server\Server;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ServerLeaderboard extends Component
{
    public string $selectedStatistic = 'server_kills';
    public Collection $serverLeaderboards;

    public function mount(): void
    {
        $this->loadServerLeaderboards();
    }

    public function updatedSelectedServer(): void
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
        $this->serverLeaderboards = Cache::remember('server.leaderboards.'.$this->selectedStatistic, 300, function () {
            return Server::query()
                ->orderByDesc($this->selectedStatistic)
                ->limit(10)
                ->get();
        });
    }

    public function render()
    {
        return view('livewire.community.server-leaderboard');
    }
}
