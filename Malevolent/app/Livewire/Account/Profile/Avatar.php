<?php

namespace App\Livewire\Account\Profile;

use App\Models\User\User;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Avatar extends Component
{
    public array $avatar = [];

    #[Locked]
    public User $user;

    public function mount(): void
    {
        $this->loadAvatar();
    }

    public function poll(): void
    {
        $this->loadAvatar();
        $this->dispatch('avatar-updated');
    }

    private function loadAvatar(): void
    {
        $this->avatar = [
            'Username' => $this->user->name,
            'Rank' => $this->user->user_rank,
            'Joined' => $this->user->format_created_at,
            'GUID' => $this->user->id,
            'Prestige' => $this->user->user_prestige,
            'Last Played' => $this->user->format_created_at,
            'Bank Balance' => $this->user->format_money,
            'Level' => $this->user->format_level,
            'Status' => $this->user->format_banned,
        ];
    }

    public function render()
    {
        return view('livewire.account.profile.avatar');
    }
}
