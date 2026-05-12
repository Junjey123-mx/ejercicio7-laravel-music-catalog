<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    protected $fillable = ['country_id', 'name', 'stage_name', 'biography', 'debut_year', 'is_active'];

    protected $casts = [
        'debut_year' => 'integer',
        'is_active'  => 'boolean',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }
}
