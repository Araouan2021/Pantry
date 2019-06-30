<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['recipe_id', 'title', 'ingredients', 'method', 'size', 'time'];
}
