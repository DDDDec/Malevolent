<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;

class ServerMission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'server_mission_title',
        'server_mission_description',
        'server_mission_statistic',
        'server_mission_statistic_amount',
    ];
}
