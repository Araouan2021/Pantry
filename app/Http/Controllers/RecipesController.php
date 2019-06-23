<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(){
    $recipes = Recipe::all();
	foreach($recipes as $recipe){
	    echo $recipe;
    }
}
}
