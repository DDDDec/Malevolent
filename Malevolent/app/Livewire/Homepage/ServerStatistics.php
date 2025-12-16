<?php

namespace App\Livewire\Homepage;

use App\Models\User\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ServerStatistics extends Component
{
    public array $statistics = [];

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
        $this->statistics = Cache::remember('server.statistics', 300, function () {
            return
                User::selectRaw('
                    COALESCE(SUM(user_kills), 0) as kills,
                    COALESCE(SUM(user_downs), 0) as downs,
                    COALESCE(SUM(user_revives), 0) as revives,
                    COALESCE(SUM(user_headshots), 0) as headshots,
                    COALESCE(SUM(user_boss_kills), 0) as bosses,
                    COALESCE(SUM(user_easter_eggs), 0) as eastereggs,
                    COALESCE(SUM(user_missions), 0) as missions,
                    COALESCE(SUM(user_achievements), 0) as achievements,
                    COALESCE(SUM(user_money), 0) as money,
                    COALESCE(SUM(user_interest_earned), 0) as interest,
                    COALESCE(SUM(user_gambled), 0) as gambled,
                    COALESCE(SUM(user_chat_games), 0) as chatgames,
                    COUNT(*) as users,
                    SUM(CASE WHEN user_rank > 5 THEN 1 ELSE 0 END) as rank_users,
                    SUM(CASE WHEN user_rank > 0 AND user_rank < 5 THEN 1 ELSE 0 END) as vip_users,
                    COALESCE(SUM(user_banned), 0) as bans
                ')->first()->toArray();
        });
    }

    public function render()
    {
        return view('livewire.homepage.server-statistics');
    }
}
