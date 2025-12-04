<?php

namespace App\Livewire\Homepage;

use App\Models\User\UserAction;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class UserActivity extends Component
{
    public array $userActions = [];
    public array $newActionIds = [];
    private array $previousActionIds = [];

    public function mount(): void
    {
        $this->loadUserActions();
    }

    public function poll(): void
    {
        $this->previousActionIds = array_column($this->userActions, 'id');
        $this->loadUserActions();

        $currentIds = array_column($this->userActions, 'id');
        $this->newActionIds = array_values(array_diff($currentIds, $this->previousActionIds));

        $this->dispatch('user-actions-updated');
    }

    private function loadUserActions(): void
    {
        $this->userActions = Cache::remember('user.action', 300, function () {
            return UserAction::latest('created_at')->take(5)->get()->toArray();
        });
    }

    public function render()
    {
        return view('livewire.homepage.user-activity');
    }
}
