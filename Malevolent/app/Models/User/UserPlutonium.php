<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserPlutonium extends Model
{
    protected $table = 'user_plutonium';

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
}
