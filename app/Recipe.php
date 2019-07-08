<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'ingredients', 'method', 'size', 'time'];
}
/*
	public function reviews(){
		return $this->hasMany('App\Review');
	}

}
/*