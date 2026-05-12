<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'name',
        'country',
        'founded_year',
        'website',
        'is_independent',
    ];

    protected $casts = [
        'founded_year'   => 'integer',
        'is_independent' => 'boolean',
    ];
}
