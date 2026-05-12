<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
