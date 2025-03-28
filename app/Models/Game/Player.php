<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'gold',
        'cup',
        'gem',
        'data',
        'bag',
        'body',
        'balo',
        'box',
        'achievement',
        'Friends',
    ];
}
