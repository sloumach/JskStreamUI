<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextGame extends Model
{
    use HasFactory;
    protected $table = 'nextgames';
    protected $fillable = ['teamA', 'teamB', 'gameDate', 'gameWeek', 'gameStadium'];
}
