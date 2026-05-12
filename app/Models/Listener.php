<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Listener extends Model
{
    protected $fillable = [
        'name',
        'email',
        'username',
        'birth_date',
        'subscription_type',
        'is_active',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'is_active'  => 'boolean',
    ];

    public function playlists(): HasMany
    {
        return $this->hasMany(Playlist::class);
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(SongRating::class);
    }
}
