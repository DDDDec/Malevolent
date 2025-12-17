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
            return User::selectRaw('
                COALESCE(SUM(user_kills), 0) as kills,
                COALESCE(SUM(user_downs), 0) as downs,
                COALESCE(SUM(user_revives), 0) as revives,
                COALESCE(SUM(user_headshots), 0) as headshots,
                COALESCE(SUM(user_boss_kills), 0) as bosses_killed,
                COALESCE(SUM(user_easter_eggs), 0) as easter_eggs,
                COALESCE(SUM(user_missions), 0) as missions,
                COALESCE(SUM(user_achievements), 0) as achievements,
                COALESCE(SUM(user_money), 0) as money_earned,
                COALESCE(SUM(user_interest_earned), 0) as interest_earned,
                COALESCE(SUM(user_gambled), 0) as money_gambled,
                COALESCE(SUM(user_chat_games), 0) as chat_games,
                COUNT(*) as players,
                SUM(CASE WHEN CAST(user_rank AS UNSIGNED) > 5 THEN 1 ELSE 0 END) AS staff_members,
                SUM(CASE WHEN CAST(user_rank AS UNSIGNED) BETWEEN 2 AND 5 THEN 1 ELSE 0 END) AS vip_players,
                COALESCE(SUM(user_banned), 0) as players_banned
            ')->first()->toArray();
        });
    }

    public function render()
    {
        return view('livewire.homepage.server-statistics');
    }
}
