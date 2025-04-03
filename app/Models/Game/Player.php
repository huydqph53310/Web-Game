<?php

namespace App\Models\Game;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /** @use HasFactory<\Database\Factories\Game\PlayerFactory> */
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
