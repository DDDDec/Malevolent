<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Number;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'user_money',
        'user_rank',
        'user_prestige',
        'user_level',
        'user_language',
        'user_color',
        'user_online',
        'user_banned',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected function formatMoney(): Attribute
    {
        return Attribute::make(
            get: fn () => Number::abbreviate($this->user_money)
        );
    }

    protected function formatCreatedAt(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->created_at)->diffForHumans()
        );
    }

    protected function formatUpdatedAt(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->updated_at)->diffForHumans()
        );
    }

    protected function formatBanned(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->user_banned ? 'Banned' : 'Unbanned'
        );
    }

    protected function formatLevel(): Attribute
    {
        return Attribute::make(
            get: fn () => Number::abbreviate($this->user_level)
        );
    }

    public function actions(): HasMany
    {
        return $this->hasMany(UserAction::class);
    }
}
