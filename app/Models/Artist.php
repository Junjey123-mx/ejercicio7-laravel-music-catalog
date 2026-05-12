<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['country_id', 'name', 'stage_name', 'biography', 'debut_year', 'is_active'];

    protected $casts = [
        'debut_year' => 'integer',
        'is_active'  => 'boolean',
    ];
}
