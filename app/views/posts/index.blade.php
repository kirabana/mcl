@extends('layouts.index')

@section('title')
MCL - All Posts
@stop

@section('content')

<div class="content">
	<div class="container">
		<div class="post">
			<h1>All posts</h1>
			@foreach ($posts as $post)

				<li>{{ link_to("/posts/{$post->title}", $post->title) }}</li>
				<li>{{ link_to("/posts/{$post->content}", $post->content) }}</li>

			@endforeach
		</div>
	</div>
</div>

@stop