<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{

	public function ShowAddRecipeForm(){
    	return view('add-recipe');
    }

    public function addRecipe(Request $request){
    	$title = $request->title;
    	$ingredients = $request->ingredients;
    	$method = $request->method;
    	$size = $request->size;
    	$time = $time->time;
    	Recipe::create(['title'=>$title, 'ingredients'->$ingredients, 'method'=>$method, 'size'=>$size, 'time'=>$time]);

    	return redirect()->route('recipes');
    }

    public function showRecipes(){
    $recipes = Recipe::all();
    return view('recipes', compact('recipes'));
    }
}	
    