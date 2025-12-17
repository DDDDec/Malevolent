<?php

namespace App\Livewire\Community;

use App\Models\User\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class UserRecentlyPlayed extends Component
{
    public Collection $recentlyPlayed;

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
        $this->recentlyPlayed = User::latest('updated_at')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.community.user-recently-played');
    }
}
