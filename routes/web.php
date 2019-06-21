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

Route::get('/getRecipe', function () {
	return "recipes";
});

Route::post('/postRecipe', function() {
	return "recipes";
});

Route::post('/postReview', function() {
	return "reviews";
});

Route::get('create', function() {
	$title = "Jellof";
	$ingredients = "4 cups of rice, 1 can of plum tomatoes, 8 pieces of chicken thighs and drumsticks, 2 large onions, 2 cups of carrots, 2 cups of potatoes, 1 head of cabbage, 1 can of tomato paste, pepper, garlic ginger";


	$method = "Wash the chicken and season it with salt. Blend 1 onion, ginger, garlic and pepper. Add the mixture to the chicken and steam the chicken for 8-10minutes. Blend the tomatoes with 1 onion and pepper. Slice the remaining onion. Make the sauce by frying the sliced onions in 3 tablespoons of vegetable oil for 2 minutes. Add 4 tablespoons of tomato puree and keep stirring for about 8 minutes until it is reduced. Add the blended tomato mixture and allow it to cook and reduce for 10 minutes. Remove the chicken broth from the steamed chicken and cool. Deep fry chicken until it is golden-brown and put aside. Add the broth to the stew and allow it to cook for 5 minutes. Either add the chicken to the stew or serve separately when the jellof rice is cooked. Add the carrots, potatoes and cabbage and cook for a few minutes. Add the rice and reduce the heat to very low. Cover the rice with kitchen foil and allow the jellof rice to steam through. Side dishes: salad or gravy";
	$size = "4 servings";
	$time = "1hr. 20mins";
	Recipe::create(
		  [
		   'title'=>$title,
		   'ingredients'=>$ingredients,
		   'method'=>$method,
		   'size'=>$size,
		   'time'=>$time
		  ]
	);
	return "created";
});

/*Route::get('create', function() {
	$reviews.recipe_id = "";
	$reviews.author = "Araba";
	$reviews.body = "This dish was easy to make.  I have already shared this recipe with my friends and family";
	Review::create(
		  [
		  'reviews.recipe_id'=>$recipe_id,
		  'author'=>$author,
		  'body'=>$body
		  ]
	);
	return "created";
});
*/

Route::get('/recipes', function() {
	$recipes = Recipe::all();
	return $recipes;
});
