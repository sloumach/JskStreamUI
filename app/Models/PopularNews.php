<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopularNews extends Model
{
    protected $fillable = ['title', 'author', 'content', 'date', 'likes', 'topic', 'image'];
}
