<!--

@extends('layouts.index')

@section('content')

	<div class="container">
		<div class="loginBackground">
			<h1>Login</h1>

			<form action="">

				<div class="row">
				    <label for="name">Userame:</label>
				    <div class="message">The name can only contain alphabet characters, spaces, hyphens, and apostophies</div>
				    <input type="text" id="name">    
				    <span id="nameMessage" class="message">Message</span>	
				</div>


				<div class="row">
					<label for="pass">Password:</label>
					<div class="message">Must be at least 4 characters</div>
					<input type="password" id="pass">    
					<span id="passMessage" class="message">Message</span>
				</div>

				<input type="submit" id="submit" value="Submit">

				<a href="{{ URL::to('/retrieve') }}">Having trouble login in?</a>
			</form>
		</div>
	</div>


@stop