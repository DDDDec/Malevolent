<?php

namespace App\Livewire\Homepage;

use App\Models\Server\ServerAction;
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
        $this->serverActions = ServerAction::latest('created_at')->take(5)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.homepage.server-activity');
    }
}
