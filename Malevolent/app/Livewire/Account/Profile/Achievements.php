<?php

namespace App\Livewire\Account\Profile;

use App\Models\Server\ServerAchievement;
use App\Models\User\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Achievements extends Component
{
    public Collection $achievements;
    public Collection $userAchievements;

    #[Locked]
    public User $user;

    public function mount(): void
    {
        $this->loadAchievements();
    }

    public function poll(): void
    {
        $this->loadAchievements();
        $this->dispatch('achievements-updated');
    }

    private function loadAchievements(): void
    {
        $this->achievements = Cache::remember(
            'profile.achievements'.$this->user->name,
            300,
            fn () => ServerAchievement::all()
        );

        $this->userAchievements = $this->user
            ->achievements()
            ->pluck('achievement_id');
    }

    public function claimAchievement($achievementId): void
    {
        if ($this->user->hasAchievement($achievementId)) {
            return;
        }

        $achievement = ServerAchievement::find($achievementId);

        if (! $achievement) {
            return;
        }

        $userValue = $this->user->getStatistic(
            $achievement->server_achievement_statistic
        );

        if ($userValue >= $achievement->server_achievement_statistic_amount) {
            $this->user->achievements()->create([
                'achievement_id' => $achievement->id,
                'user_id'        => $this->user->id,
            ]);

            $this->user->increment(
                'user_money',
                $achievement->server_achievement_reward
            );
        }
    }

    public function render()
    {
        return view('livewire.account.profile.achievements');
    }
}
