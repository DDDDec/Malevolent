<?php

namespace App\Livewire\Homepage;

use App\Models\Server\Server;
use Livewire\Component;

class Servers extends Component
{
    public array $servers = [];

    public function mount(): void
    {
        $this->loadServers();
    }

    public function poll(): void
    {
        $this->loadServers();
        $this->dispatch('servers-updated');
    }

    private function loadServers(): void
    {
        $this->servers = Server::all()->toArray();
    }

    public function render()
    {
        return view('livewire.homepage.servers');
    }
}
