<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{
    protected $fillable = [
        'listener_id',
        'name',
        'description',
        'is_public',
        'total_songs',
    ];

    protected $casts = [
        'is_public'   => 'boolean',
        'total_songs' => 'integer',
    ];

    public function listener(): BelongsTo
    {
        return $this->belongsTo(Listener::class);
    }

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'playlist_song')
            ->withPivot(['position', 'added_at'])
            ->withTimestamps();
    }
}
