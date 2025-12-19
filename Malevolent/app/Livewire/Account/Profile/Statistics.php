<?php

namespace App\Livewire\Account\Profile;

use App\Models\User\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Statistics extends Component
{
    public array $statistics = [];

    #[Locked]
    public User $user;

    public function mount(): void
    {
        $this->loadStatistics();
    }

    public function poll(): void
    {
        $this->loadStatistics();
        $this->dispatch('statistics-updated');
    }

    private function loadStatistics(): void
    {
        $this->statistics = Cache::remember("profile.user.statistics.{$this->user->id}", 300, function() {
            return [];
        });
    }

    public function render()
    {
        return view('livewire.account.profile.statistics');
    }
}
