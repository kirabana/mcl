@extends('layouts.index')

@section('content')

	<div class="container">





		<div class="tagMenu">
				<h2>Categories</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>

				</ul>

				<h2>Popular Categories</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>

				</ul>

				<h2>Recent Entries</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					
				</ul>

				<h2>Popular Entries</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					
				</ul>
			</div>






		<h2>Recipes</h2>
		<div class="containerRecipe">


			<div class="recipeEntry">
				<div class="recipethumbnail">
					<img src="{{asset("assets/img/entry/cooking-blog.png")}}" alt="">
				</div>
				<div class="recipeContent">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus, laudantium, in, suscipit quasi impedit voluptate sed eum modi dolorum facere sunt enim dolorem quidem quis ab dolores reiciendis rerum.
					<a href="{{ URL::to('/entry') }}"><button type="button" class="readButton">Read More</button></a>
				</div>
				<div class="recipeFooter">
					<span class="rating">Rating</span> <span class="date">23 Oct 2014</span> <span class="author">Hikari</span>
				</div>
			</div>



			<div class="recipeEntry">
				<div class="recipethumbnail">
					<img src="{{asset("assets/img/entry/cooking-blog.png")}}" alt="">
				</div>
				<div class="recipeContent">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus, laudantium, in, suscipit quasi impedit voluptate sed eum modi dolorum facere sunt enim dolorem quidem quis ab dolores reiciendis rerum.
					<a href="{{ URL::to('/entry') }}"><button type="button" class="readButton">Read More</button></a>
				</div>
				<div class="recipeFooter">
					<span class="rating">Rating</span> <span class="date">23 Oct 2014</span> <span class="author">Hikari</span>
				</div>
			</div>



			<div class="recipeEntry">
				<div class="recipethumbnail">
					<img src="{{asset("assets/img/entry/cooking-blog.png")}}" alt="">
				</div>
				<div class="recipeContent">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus, laudantium, in, suscipit quasi impedit voluptate sed eum modi dolorum facere sunt enim dolorem quidem quis ab dolores reiciendis rerum.
					<a href="{{ URL::to('/entry') }}"><button type="button" class="readButton">Read More</button></a>
				</div>
				<div class="recipeFooter">
					<span class="rating">Rating</span> <span class="date">23 Oct 2014</span> <span class="author">Hikari</span>
				</div>
			</div>




		</div>
	</div>

@stop






<!-- 	<div class="container">

		<div class="containerRecipe">
			<h2>Recipes</h2>
			<div class="recipethumbnail">
				<img src="{{asset("assets/img/entry/cooking-blog.png")}}" alt="">
			</div>
			<div class="recipeContent">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus, laudantium, in, suscipit quasi impedit voluptate sed eum modi dolorum facere sunt enim dolorem quidem quis ab dolores reiciendis rerum.
				<a href="{{ URL::to('/entry') }}"><button type="button" class="readButton">Read More</button></a>
			</div>
		</div>


		<div class="containerRecipe">
			<div class="recipethumbnail">
				<img src="{{asset("assets/img/entry/cooking-blog.png")}}" alt="">
			</div>
			<div class="recipeContent">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, natus, laudantium, in, suscipit quasi impedit voluptate sed eum modi dolorum facere sunt enim dolorem quidem quis ab dolores reiciendis rerum.
				<a href="{{ URL::to('/entry') }}"><button type="button" class="readButton">Read More</button></a>
			</div>
		</div>

		<div class="tagMenu">
				<h2>Categories</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>

				</ul>

				<h2>Popular Categories</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>

				</ul>

				<h2>Recent Entries</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					
				</ul>

				<h2>Popular Entries</h2>
				<ul>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					<li><a href="{{ URL::to('/') }}">frefre</a></li>
					
				</ul>
			</div>
		</div> -->
