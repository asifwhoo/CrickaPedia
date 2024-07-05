<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'nationality',
        'batting_style',
        'bowling_style',
        'runs_odi',
        'runs_t20',
        'runs_test',
        'wickets_odi',
        'wickets_t20',
        'wickets_test',
        'best_runs',
        'best_wickets',
        'team_ipl',
        'team_bpl',
        'team_cpl',
        'description',
    ];
}
