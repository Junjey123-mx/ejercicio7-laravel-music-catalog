<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
