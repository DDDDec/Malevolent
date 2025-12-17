<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;

class ServerAchievement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'server_achievement_title',
        'server_achievement_description',
        'server_achievement_statistic',
        'server_achievement_statistic_amount',
    ];
}
