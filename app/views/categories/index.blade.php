@extends('layouts.index')

@section('content')

	<div class="container">
		<div class="containerRecipe">
			@foreach ($categories as $category)
			<div class="recipeEntry">
				<h2>{{ $category->title }}</h2><br>
			</div>
			@endforeach

			<a href="{{ URL::to('/users') }}">User Page</button></a>
		</div>
	</div>

@stop