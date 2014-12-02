@extends('layouts.index')

@section('content')

<div class="container">
	










	<div class="containerRecipe">
			<h2>{{ $post->title }}</h2>
			<div class="recipethumbnailMain">
				<img src="{{asset("assets/img/entry/".$post->image)}}" alt="">
			</div>
			<div class="recipeContentMain">
				{{ $post->content }}
			</div>

			<div class="recipeMain">
				<h1>Ingredients</h1>
				<ul>
					{{ $post->ingredients }}

				</ul>
			</div>

			<div class="recipeMain">
				<h1>Method</h1>
				<ol>
					{{ $post->method }}
				</ol>
			</div>

			<div class="recipeMain">
				<h1>Leave A Comment</h1>
				<div class="row">
					<a href="#" id="logInToComment">Login To Comment</a>
				</div>
				<div class="row">
					<label for="commentName"><b>Username</b></label>
					<input type="text">
				</div>
				<div class="row">
					<label for="commentEmail"><b>Email</b></label>
					<input type="text">
				</div>
				<div class="row">
					<label for="commentComment"><b>Comment</b></label>
					<textarea name="" id=""></textarea>
				</div>
				<div class="row">
					<a href="{{ URL::to('/register') }}"><button type="button" class="register">Submit</button></a>
				</div>
			</div>

			<div class="recipeMain">
				<h1>(3) Comments</h1>
			</div>

			<div class="commentSection">
				<div class="commentTitleFooter">User1</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat libero voluptas quidem laborum magnam, praesentium in animi omnis doloremque, blanditiis rerum eligendi officia fugit laudantium eos deserunt porro saepe.</p>
				<div class="commentTitleFooter">21 Nov 2014</div>
				<p><a href="#">Reply</a></p>

				<div class="replySection">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur at corrupti necessitatibus quos perspiciatis quaerat suscipit, quia, officiis cupiditate dolor dolorem sequi alias ut ipsam vel similique debitis non. Pariatur.
				</div>

				<div class="replySection">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur at corrupti necessitatibus quos perspiciatis quaerat suscipit, quia, officiis cupiditate dolor dolorem sequi alias ut ipsam vel similique debitis non. Pariatur.
				</div>
			</div>


			<div class="commentSection">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat libero voluptas quidem laborum magnam, praesentium in animi omnis doloremque, blanditiis rerum eligendi officia fugit laudantium eos deserunt porro saepe.</p>
				<p><a href="#">Reply</a></p>
			</div>

			<div class="commentSection">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat libero voluptas quidem laborum magnam, praesentium in animi omnis doloremque, blanditiis rerum eligendi officia fugit laudantium eos deserunt porro saepe.</p>
				<p><a href="#">Reply</a></p>
			</div>




		</div>

		<div class="tagMenu">
			<h2>Categories</h2>
			<ul>@foreach (Category::all() as $category)
				<li>{{ $category->title }}</li>
				@endforeach
			</ul>
		</div>






	
</div>
@stop



<!-- <div class="content">
	<div class="container">
		<div class="post">
			<h1>{{ $post->title }}</h1>
			{{ $post->content }}
		</div>
	</div>
</div> -->