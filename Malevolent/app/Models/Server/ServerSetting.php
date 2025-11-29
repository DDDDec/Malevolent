<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;

class ServerSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'maintenance',
    ];
}
