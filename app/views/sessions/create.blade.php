@extends('layouts.index')

@section('content')

	<div class="container">
		<div class="loginBackground">
			<h1>Login</h1>

			{{ Form::open(['route' => 'sessions.store']) }}

				<div class="row">
					{{ Form::label('username', 'Username:') }}
					{{ Form::text('username') }}
				</div>

				<div class="row">
					{{ Form::label('email', 'Email:') }}
					{{ Form::text('email') }}
				</div>

				<div class="row">
					{{ Form::label('password', 'Password:') }}
					{{ Form::password('password') }}
				</div>

				<div class="row">
					{{ Form::submit('Login') }}
				</div>

			{{ Form::close() }}


		</div>
	</div>


@stop