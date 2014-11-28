@extends('layouts.index')

@section('content')

	<div class="container">
		<h1>Welcome Admin</h1>

		<a href="{{ URL::to('/entry') }}"><button type="button" class="register">Post</button></a>
		<a href="{{ URL::to('/entry') }}"><button type="button" class="register">Category</button></a>
		<a href="{{ URL::to('/entry') }}"><button type="button" class="register">Members</button></a>
	</div>

@stop