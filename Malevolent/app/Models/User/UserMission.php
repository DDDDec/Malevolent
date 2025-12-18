<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserMission extends Model
{
    protected $fillable = [
        'user_id',
        'mission_id',
        'mission_name',
        'mission_statistic',
        'mission_statistic_amount',
        'mission_reward',
        'mission_type',
        'mission_completed',
        'reset_at',
    ];

    protected $casts = [
        'mission_completed' => 'boolean',
        'reset_at' => 'datetime',
    ];
}
