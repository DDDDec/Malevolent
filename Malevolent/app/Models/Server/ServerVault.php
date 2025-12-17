<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;

class ServerVault extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'server_ip',
        'server_port',
    ];
}
