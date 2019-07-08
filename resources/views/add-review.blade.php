<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link rel="stylesheet" href="dist/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/icons/css/materialdesignicons.css">
</head>
<style>

body {
  background-color: FloralWhite;
}
.recipe-details {
  background-color: #fff;
  padding: 20px;
  margin: 30px 0;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

.recipe-reviews {
  background-color: #fff;
  padding: 20px;
  margin: 30px 0;
  box-shadow: 0 .2rem 1rem rgba(0,0,0,.10)!important;
}

h1 {
  padding: 50px;
}

h4 {
  text-align: center;
  color: SaddleBrown;
  font-family: 'Allura', cursive;
  font-size: 50px; 
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h1 style="text-align: center; color: DarkRed; font-size: 75px; font-family: 'Questrial', sans-serif;, sans-serif; font-weight: bold;">Pantry</h1>
      <h3 style="color: SaddleBrown; font-family: 'Allura', cursive; font-size: 40px;">Showing Recipes For: &nbsp; ingredients </h3>
      <hr>
      @foreach($recipes as $recipe)
        <div class="recipe-details">
         <a href="{{route('recipes', '$recipe.id')}}">
        <img src="{{route('recipes', '$recipe.file')}}"
             class="img-responsive img-thumbnail">
        </a>
          <h2 style="color: DarkRed; font-size: 40px; font-family: 'Khand', sans-serif;"></u>Title<br></h2>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Ingredients</u><br></p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Method</u><br></p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Serving size</u><br></p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Time</u><br></p>
        </div>
        </div>
      @endforeach

      <h5>LEAVE A REVIEW</h5>
      <hr>

  <div id="after_submit"></div>
  <form action="{{=URL('postReview', args=recipe.id)}}" method="post" class="form">
  <div class="row">
    <label class="required" for="name">Your name:</label><br />
    <input id="name" class="input" name="author" type="text" value="" size="30" /><br />
    <span id="name_validation" class="error_name"></span>
  </div>
  <div class="row">
    <label class="required" for="review">Your review:</label><br />
    <textarea id="review" class="input" name="body" rows="7" cols="50"></textarea><br />
    <span id="review_validation" class="error_review"></span>
  </div>
  <input type="submit" class="button" value="Submit">
  </form>
  </div>
  <hr> 
  <h6>Reviews</h6>
  @foreach($reviews as $review)
  <div class="reviews">
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Author</u><br>{{=review.author}}</p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Body</u><br>{{=review.body}}</p>
  </div>
  @endeach
      
      

      
      
