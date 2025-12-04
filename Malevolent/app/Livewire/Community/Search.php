<?php

namespace App\Livewire\Community;

use App\Models\User\User;
use Livewire\Component;

class Search extends Component
{
    public array $search = [];

    public function mount(): void
    {
        $this->loadSearch();
    }

    public function poll(): void
    {
        $this->loadSearch();
        $this->dispatch('search-updated');
    }

    private function loadSearch(): void
    {
        $this->search = User::all()->toArray();
    }

    public function render()
    {
        return view('livewire.community.search');
    }
}
