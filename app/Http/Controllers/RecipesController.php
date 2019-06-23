<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{
    public function index(){
    $recipes = Recipe::all();
	foreach($recipes as $recipe){
	    echo $recipe;
    }

    }

    public function create(){

    Recipe::create(
          [
		   'title'=>'Jellof',
		   'ingredients'=>'ingredients',
		   'method'=>'method',
		   'size'=>'size',
		   'time'=>'time'
		  ]
	);
	return "created";
    }



    public function show($id)
    {
    	$recipe = Recipe::find($id);
    	return $recipe;

    }

    public function destroy($id)
    {
    	Recipe::destroy($id);
    	return "deleted
    }








}