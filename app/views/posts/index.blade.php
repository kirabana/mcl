@extends('layouts.index')

@section('content')



	<div class="container">



		<div class="tagMenu">
			<h2>Categories</h2>
			<ul>@foreach (Category::all() as $category)
				<li>{{ $category->title }}</li>
				@endforeach
			</ul>
		</div>




		<div class="containerRecipe">
			@foreach ($posts as $post)
			<div class="recipeEntry">
				<h2>{{ $post->title }}</h2>
				<div class="recipethumbnail">
					<img src="{{asset("assets/img/entry/".$post->image)}}" alt="">
				</div>
				
				<div class="recipeContent">
					{{ $post->content }}
					<div>
						<a href="posts/{{ $post -> id }}"><button type="button" class="readButton">Read More</button></a>
					</div>
				</div>
				<div class="recipeFooter">
					<span class="rating">Rating</span> <span class="date">{{ date('d/m/Y', strtotime($post->created_at)) }}</span> <span class="author">Hikari</span>
				</div>
			</div>
			@endforeach
		</div>



		<!-- <div class="containerRecipe">
			<a href="{{ URL::to('/users') }}">Users Page</button></a>
			<a href="{{ URL::to('/create') }}">Create Another Post</button></a>
		</div> -->


	</div>

	

@stop





<!-- <div class="container">
		<div class="post">
			<h1>All posts</h1>
			@foreach ($posts as $post)

				<li>{{ link_to("/posts/{$post->title}", $post->title) }}</li>
				<li>{{ link_to("/posts/{$post->content}", $post->content) }}</li>

			@endforeach
		</div>
	</div> -->