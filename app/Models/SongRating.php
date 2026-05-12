<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SongRating extends Model
{
    protected $fillable = [
        'song_id',
        'listener_id',
        'rating',
        'comment',
        'rated_at',
    ];

    protected $casts = [
        'rating'   => 'integer',
        'rated_at' => 'datetime',
    ];

    public function song(): BelongsTo
    {
        return $this->belongsTo(Song::class);
    }

    public function listener(): BelongsTo
    {
        return $this->belongsTo(Listener::class);
    }
}
