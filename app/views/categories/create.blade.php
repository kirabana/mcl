@extends('layouts.index')

@section('content')

<div class="content">
	<div class="container">
		<div class="post">
			<h1>Create Category</h1>



			{{ Form::open(['action' => 'CategoriesController@store']) }}

			<div class="form-group">
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', '', ['class' => 'form-control']) }}
				{{ $errors->first('title') }}
			</div>

			<div class="form-group">
				{{ Form::submit('Post', ['class' => 'submit']) }}
			</div>

			{{ Form::close() }}
		</div>
		<a href="{{ URL::to('/categories') }}">Back To Category Page</button></a>
	</div>
</div>

@stop