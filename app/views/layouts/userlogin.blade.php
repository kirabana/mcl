<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My COOKING LESSON | Recipes & Blogs</title>
	<link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

	<header>
		<div class="barTop">
			<a href="{{ URL::to('/logout') }}">Logout</a>
		</div>
		<div class="logo">
			<img src="{{asset("assets/img/mcl_logo.png")}}" alt="MCL Logo">
			<h1 class="invisibleFont">My Cooking Lesson</h1>
		</div>

		<nav>
			<ul>
				<li><a href="{{ URL::to('/') }}">Home</a></li>
				<li><a href="{{ URL::to('/recipes') }}">Recipes</a></li>
				<li><a href="{{ URL::to('/about') }}">About</a></li>
				<li><a href="{{ URL::to('/contact') }}">Contact</a></li>
			</ul>
		</nav>
	</header>

	@yield('content')

	<footer>
		<div class="container">
			<div class="col-2">
				<img src="{{asset("assets/img/mcl_logo_white.png")}}" alt="">
			</div>
			<div class="col-2">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Recipes</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="col-4">
				<ul>
					<li><a href="#">Quick Dinner</a></li>
					<li><a href="#">Japanese</a></li>
					<li><a href="#">Chicken</a></li>
					<li><a href="#">Recipe for Children</a></li>
				</ul>
			</div>
			<div class="col-1">
				<ul>
					<a href="{{ URL::to('/login') }}"><button type="button" class="register">Login</button></a>
					<a href="{{ URL::to('/register') }}"><button type="button" class="register">Register</button></a>
				</ul>
			</div>
		</div>
	</footer>
	<footer>
		<p>© My Cooking Lesson 2014</p>
	</footer>
</body>
</html>






