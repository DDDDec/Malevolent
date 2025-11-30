<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServerAction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'user_name',
        'user_action',
    ];

    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class);
    }
}
