<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends Model
{
    protected $fillable = [
        'album_id',
        'genre_id',
        'title',
        'duration_seconds',
        'track_number',
        'popularity_score',
        'is_single',
        'release_date',
    ];

    protected $casts = [
        'duration_seconds' => 'integer',
        'track_number'     => 'integer',
        'popularity_score' => 'integer',
        'is_single'        => 'boolean',
        'release_date'     => 'date',
    ];

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function playlists(): BelongsToMany
    {
        return $this->belongsToMany(Playlist::class, 'playlist_song')
            ->withPivot(['position', 'added_at'])
            ->withTimestamps();
    }

    public function ratings(): HasMany
    {
        return $this->hasMany(SongRating::class);
    }
}
