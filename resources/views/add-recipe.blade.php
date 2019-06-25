<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css?family=Damion" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
</head>
<style>

h1 {
	font-family: 'Damion', sans-serif;
	color: DarkRed;
}

body {
	color: DarkRed;
	font-size: 25px;
	font-family: 'Allura', cursive;
}

.btn {
	background-color: DarkRed;
	font-family: 'Damion', sans-serif;
	font-size: 20px;
    color: white;
    padding: 12px 20px;
    margin: 20px;
    border: none;
    border-radius: 4px;
}

</style>
<body>
<h1>Post a Recipe</h1>
<body>

<form action="{{route('recipes.save')}}" method="post">
<div class="form-group">
{{ csrf_field() }}
<input type="text" class="form-control" name="title"> 
<input type="text" name="ingredients">
<input type="text" name="method"><br>
<input type="text" name="size"><br>
<input type="text" name="time"><br>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

