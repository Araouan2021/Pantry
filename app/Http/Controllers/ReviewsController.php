<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function ShowAddReviewForm(){
    	return view('add-review');
    }

    public function addReview(Request $request){
    	Review::create([
    	'recipe_id' => request('recipe_id')
    	'title' => request('title'),
    	'ingredients' => request('ingredients'),
    	'method' => request('method'),
    	'size' => request('size'),
    	'time' => request('time')
    	]);

    	return redirect()->route('reviews');
    }

    public function showReviews(){
    $reviews = Review::all();
    return view('reviews', compact('reviews'));
    }
}	
    
}
