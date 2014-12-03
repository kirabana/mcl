@extends('layouts.index')

@section('content')

<div class="content">
	<div class="container">
		<div class="post">
			<h1>Edit User</h1>

			{{ Form::open(['action' => array('UsersController@update', $user->id), 'method' => 'put']) }}

			<div class="form-group">
				{{ Form::label('username', 'Username:') }}
				{{ Form::text('username', $user->username, ['class' => 'form-control']) }}
				{{ $errors->first('username', '<span class="error">:message</span>') }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', $user->email, ['class' => 'form-control']) }}
				{{ $errors->first('email', '<span class="error">:message</span>') }}
			</div>


				<div class="form-group">
					{{ Form::label('password', 'Change Password:') }}
					{{ Form::password('password', ['class' => 'form-control']) }}
					{{ $errors->first('password', '<span class="error">:message</span>') }}
				</div>

				<div class="form-group">
					{{ Form::label('confirmPassword', 'Confirm New Password:') }}
					{{ Form::password('confirmPassword', ['class' => 'form-control']) }}
					{{ $errors->first('confirmPassword', '<span class="error">:message</span>') }}
				</div>

			<div class="form-group">
				{{ Form::submit('Update', ['class' => 'submit']) }}
			</div>

			{{ Form::close() }}
		</div>
	</div>
</div>

@stop