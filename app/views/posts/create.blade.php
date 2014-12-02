@extends('layouts.index')

@section('content')

<div class="content">
	<div class="container">
		<div class="post">
			<h1>Create A Post</h1>



			{{ Form::open(['action' => 'PostsController@store', 'files'=> true]) }}

			<div class="form-group">
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', '', ['class' => 'form-control']) }}
				{{ $errors->first('title') }}
			</div>




			<div class="form-group">
				{{ Form::label('image', 'Image:') }}
				{{ Form::file('image', ['class' => 'form-control']) }}
				{{ $errors->first('image') }}
			</div>




			<div class="form-group">
				{{ Form::label('content', 'Content:') }}
				{{ Form::textarea('content', '', ['class' => 'form-control']) }}
				{{ $errors->first('content') }}
			</div>



			<div class="form-group">
				{{ Form::label('ingredients', 'Ingredients:') }}
				{{ Form::textarea('ingredients', '', ['class' => 'form-control']) }}
				{{ $errors->first('ingredients') }}
			</div>

			<div class="form-group">
				{{ Form::label('method', 'Method:') }}
				{{ Form::textarea('method', '', ['class' => 'form-control']) }}
				{{ $errors->first('method') }}
			</div>

			<div class="form-group">
				{{ Form::label('category_id', 'Category:') }}
				{{ Form::select('category_id', ['' => '--Please Select--'] + Category::lists('title', 'id'), '', ['class' => 'form-control']) }}
				{{ $errors->first('category_id') }}
			</div>





			<div class="form-group">
				{{ Form::submit('Post', ['class' => 'submit']) }}
			</div>

			{{ Form::close() }}
		</div>
		<a href="{{ URL::to('/posts') }}">Back to Posts Page</button></a>
	</div>
</div>

@stop