<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['reviews.recipe_id', 'author', 'body'];



    public function recipe(){
    	return $this->belongsTo('App\Recipe');
    }
}
