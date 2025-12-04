<?php

namespace App\Livewire\Homepage;

use App\Models\Server\ServerAction;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ServerActivity extends Component
{
    public array $serverActions = [];
    public array $newActionIds = [];
    private array $previousActionIds = [];

    public function mount(): void
    {
        $this->loadServerActions();
    }

    public function poll(): void
    {
        $this->previousActionIds = array_column($this->serverActions, 'id');
        $this->loadServerActions();

        $currentIds = array_column($this->serverActions, 'id');
        $this->newActionIds = array_values(array_diff($currentIds, $this->previousActionIds));

        $this->dispatch('server-actions-updated');
    }

    private function loadServerActions(): void
    {
        $this->serverActions = Cache::remember('server.action', 300, function () {
            return ServerAction::latest('created_at')->take(5)->get()->toArray();
        });
    }

    public function render()
    {
        return view('livewire.homepage.server-activity');
    }
}
