<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Server extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'server_ip',
        'server_port',
        'server_map',
        'server_round',
        'server_players',
        'server_players_count',
        'server_players_max',
        'server_password',
        'server_maintenance',
        'server_kills',
        'server_downs',
        'server_revives',
        'server_headshots',
    ];

    public function actions(): HasMany
    {
        return $this->hasMany(ServerAction::class);
    }

    public function leaderboards(): HasMany
    {
        return $this->hasMany(ServerLeaderboard::class);
    }
}
