<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListesJoueurs extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'numero', 'poste', 'datedenaissance'];
    public function joueurs()
    {
        return $this->hasMany(ListesJoueurs::class);
    }
}
