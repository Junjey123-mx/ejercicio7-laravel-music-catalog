<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['artist_id', 'title', 'release_year', 'total_tracks', 'is_explicit'];

    protected $casts = [
        'release_year' => 'integer',
        'total_tracks' => 'integer',
        'is_explicit'  => 'boolean',
    ];
}
