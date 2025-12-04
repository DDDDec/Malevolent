<?php

namespace App\Livewire\Account;

use App\Models\User\User;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Avatar extends Component
{
    #[Locked]
    public User $user;

    public function mount(): void
    {

    }

    public function poll(): void
    {

    }

    private function loadAvatar(): void
    {

    }

    public function render()
    {
        return view('livewire.account.avatar');
    }
}
