<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{

	public function ShowAddRecipeForm(){
    	return view('recipes.add-recipe');
    }

    public function addRecipe(Request $request){
    	$title = $request->title;
    	Recipe::create(['title'=>$title]);
    	return redirect()->route('recipes');
    }

    public function showRecipes(){
    $recipes = Recipe::all();
    return view('recipes.recipes', compact('recipes'));
    }
}	
    