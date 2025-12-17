<?php

namespace App\Livewire\Community;

use App\Models\User\User;
use Livewire\Component;

class Search extends Component
{
    public array $players = [];
    public string $search = '';

    public function mount(): void
    {
        $this->loadSearch();
    }

    public function updatedSearch(): void
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
        $this->players = User::query()->when($this->search !== '', fn ($query) => $query->where('name', 'like', '%' . $this->search . '%'))->limit(20)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.community.search');
    }
}
