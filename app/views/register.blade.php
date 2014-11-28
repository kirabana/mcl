<!--

@extends('layouts.index')

@section('content')

	<div class="container">
		<div class="col-6">
			<p>Please use the form on the right to register yourself to My Cooking Lesson.</p>
			<p>If you are already a member please login by clicking here.</p>
		</div>

		<div class="loginBackground">
			<h1>Register</h1>
			<form action="">

				<div class="row">
				    <label for="name">Username:</label>
				    <div class="message">The name can only contain alphabet characters, spaces, hyphens, and apostophies</div>
				    <input type="text" id="name">    
				    <span id="nameMessage" class="message">Message</span>	
				</div>


				<div class="row">
					<label for="email">Your Email Address:</label>
					<div class="message">Please put in the correct email</div>
					<input type="text" id="email">    
					<span id="emailMessage" class="message">Message</span>
				</div>




				<div class="row">
					<label for="pass">Password:</label>
					<div class="message">Must be at least 4 characters</div>
					<input type="password" id="pass">    
					<span id="passMessage" class="message">Message</span>
				</div>



				<div class="row">
					<label for="pass2">Confirm Password:</label>
					<div class="message">Retype password</div>
					<input type="password" id="pass2">    
					<span id="pass2Message" class="message">Message</span>
				</div>


				<input type="submit" id="submit" value="Submit">


			</form>
		</div>

		
	</div>

@stop