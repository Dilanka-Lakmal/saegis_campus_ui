<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    protected $guarded = [];

    protected $casts = [
        'highlights' => 'array',
        'is_modal'   => 'boolean',
        'is_active'  => 'boolean',
    ];
}