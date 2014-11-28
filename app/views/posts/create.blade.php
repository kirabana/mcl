@extends('layouts.index')

@section('title')
Posts - Create Post
@stop

@section('content')

<div class="content">
	<div class="container">
		<div class="post">
			<h1>Create Post</h1>



			{{ Form::open(['action' => 'PostsController@store']) }}

			<div class="form-group">
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', '', ['class' => 'form-control']) }}
				{{ $errors->first('title') }}
			</div>

			<div class="form-group">
				{{ Form::label('content', 'Content:') }}
				{{ Form::textarea('content', '', ['class' => 'form-control']) }}
				{{ $errors->first('content') }}
			</div>

			<div class="form-group">
				{{ Form::submit('Post', ['class' => 'submit']) }}
			</div>

			{{ Form::close() }}
		</div>
	</div>
</div>

@stop