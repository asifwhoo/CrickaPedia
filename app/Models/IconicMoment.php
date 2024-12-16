<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconicMoment extends Model
{
    use HasFactory;

    protected $fillable = [
        'iconic_name',
        'player_name',
        'date',
        'history',
        'picture',
    ];
}
