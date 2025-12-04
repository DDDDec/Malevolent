<?php

namespace App\Livewire\Community;

use App\Models\User\User;
use Livewire\Component;

class UserRecentlyPlayed extends Component
{
    public array $recentlyPlayed = [];

    public function mount(): void
    {
        $this->loadRecentlyPlayed();
    }

    public function poll(): void
    {
        $this->loadRecentlyPlayed();
        $this->dispatch('recently-played-updated');
    }

    private function loadRecentlyPlayed(): void
    {
        $this->recentlyPlayed = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.community.user-recently-played');
    }
}
