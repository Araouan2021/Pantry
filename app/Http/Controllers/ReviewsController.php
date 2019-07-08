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
    	'author' => request('author'),
    	'body' => request('body'),
    	]);

    	return redirect()->route('reviews');
    }

    public function showReviews(){
    $reviews = Review::all();
    return view('reviews', compact('reviews'));
    }
}	
    
}
