@extends('layouts.index')

@section('content')

	<div class="container">
		<h1>Welcome</h1>

		<a href="{{ URL::to('posts/create') }}"><button type="button" class="readButton">Create A Post</button></a>
		<a href="{{ URL::to('categories/create') }}"><button type="button" class="readButton">Create A Category</button></a>
		<a href="{{ URL::to('users/create') }}"><button type="button" class="readButton">Create A User</button></a>

	</div>

@stop