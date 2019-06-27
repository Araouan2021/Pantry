<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['recipe_id', 'title', 'ingredients', 'method', 'size', 'time'];
}
