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

Route::get('uploadfile','HomeController@uploadfile');

/*

Route::get('/add-review', 'ReviewsController@ShowAddReviewForm')->name('reviews.add');

Route::post('add', 'ReviewsController@AddReview')->name('reviews.save');

Route::get('/reviews', 'ReviewsController@showReviews')->name('reviews');



/*Route::get('/review/{id}', function($id){
	$recipe = Recipe::find($id);
	return $recipe->reviews;
});


Route::get('/add-review/{id}', function($id){
	$recipe = Recipe::find($id);
	$recipe->reviews()->create();
});
