<?php

namespace App\Livewire\Account;

use App\Models\User\User;
use Livewire\Component;

class Avatar extends Component
{
    public $user;

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
        $this->user = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.account.avatar');
    }
}
