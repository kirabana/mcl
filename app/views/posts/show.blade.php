@extends('layouts.index')

@section('title')
MCL - {{ $post->title }}
@stop

@section('content')

<div class="content">
	<div class="container">
		<div class="post">
			<h1>{{ $post->title }}</h1>
			{{ $post->content }}
		</div>
	</div>
</div>

@stop