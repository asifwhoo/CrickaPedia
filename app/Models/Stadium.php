<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;

    protected $table = 'stadiums';

    protected $fillable = [
        'stadium_name',
        'establishment',
        'location',
        'capacity',
        'stadium_history',
        'picture',
    ];
}
