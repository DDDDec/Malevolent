<?php

namespace App\Livewire\Account\Profile;

use App\Models\User\User;
use App\Models\User\UserAction;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Locked;
use Livewire\Component;

class UserActivity extends Component
{
    public array $userActivity = [];

    #[Locked]
    public User $user;

    public function mount(): void
    {
        $this->loadUserActivity();
    }

    public function poll(): void
    {
        $this->loadUserActivity();
        $this->dispatch('user-activity-updated');
    }

    private function loadUserActivity(): void
    {
        $this->userActivity = Cache::remember(
            "profile.user.activity.{$this->user->id}",
            300,
            fn () => UserAction::where('user_name', $this->user->name)->latest()->limit(5)->get()->toArray()
        );
    }

    public function render()
    {
        return view('livewire.account.profile.user-activity');
    }
}
