@extends('layouts.index')

@section('content')

	<div class="container">

		<div class="loginBackground">

			<h1>Register</h1>

			{{ Form::open(['route' => 'users.store']) }}
				
				<div class="row">
					{{ Form::label('username', 'Username:') }}
					{{ Form:: text('username') }}
					{{ $errors->first('username') }}
				</div>

				<div class="row">
					{{ Form::label('email', 'Email:') }}
					{{ Form:: text('email') }}
					{{ $errors->first('email') }}
				</div>

				<div class="row">
					{{ Form::label('password', 'Password:') }}
					{{ Form:: password('password') }}
					{{ $errors->first('password') }}
				</div>

				<div class="row">
					{{ Form::submit('Register') }}
				</div>

			{{ Form::close() }}

		</div>

	</div>

@stop