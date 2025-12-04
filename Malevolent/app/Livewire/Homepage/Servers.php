<?php

namespace App\Livewire\Homepage;

use App\Models\Server\Server;
use Livewire\Component;

class Servers extends Component
{
    public function render()
    {
        $servers = Server::all();

        return view('livewire.homepage.servers', [
            'servers' => $servers
        ]);
    }
}
