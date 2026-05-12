<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listener extends Model
{
    protected $fillable = [
        'name',
        'email',
        'username',
        'birth_date',
        'subscription_type',
        'is_active',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'is_active'  => 'boolean',
    ];
}
