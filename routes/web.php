<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Recipe;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-recipe', 'RecipesController@ShowAddRecipeForm')->name('recipes.add');

Route::post('add', 'RecipesController@AddRecipe')->name('recipes.save');

Route::get('/recipes', 'RecipesController@showRecipes')->name('recipes');



