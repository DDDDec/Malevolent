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
        'server_password',
        'server_maintenance',
    ];

    public function actions(): HasMany
    {
        return $this->hasMany(ServerAction::class);
    }
}
