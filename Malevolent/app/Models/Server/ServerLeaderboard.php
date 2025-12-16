<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServerLeaderboard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'server_id',
        'server_map',
        'server_round',
        'server_players',
        'server_player_count',
    ];

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class);
    }
}
