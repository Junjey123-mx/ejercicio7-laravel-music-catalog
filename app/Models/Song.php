<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
