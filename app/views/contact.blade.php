@extends('layouts.index')

@section('content')

	<div class="container">
		<div class="col-12">
			<h1>Contact</h1>
		</div>

		<div class="col-6">
			<p>Please use the contact form on the right if you wish to message us and we will get back to you as soon as possible.</p>
			<p>Otherwise please send us an e-mail to <a href="mailto:someone@yoursite.com">hello@mycookinglesson.com</a></p>
		</div>

		<div class="col-6">

			<form action="">
				<!-- Name -->
				<div class="row">
					<label for="name"><b>Name</b></label>
					<input type="text" id="name">
					<span id="nameMessage" class="message">Message</span>
				</div>

				<!-- Email-->
				<div class="row">
					<label for="bookingEmail"><b>Email</b></label>
					<input type="text" name="bookingEmail" id="email">
					<span id="emailMessage" class="message">Message</span>
				</div>

				<!-- Message -->
				<div class="row">
					<label for="message"><b>Message</b></label>
					<label for="message"></label>
			    	<textarea name="message"></textarea>
				</div>

				<!-- Submit-->
				<div id="submitform">
					<!-- Submit for Adventure and scenic-->
					<div class="row">
						<input type="submit" class="register" value="Submit" id="submitButton">
					</div>
				</div>
			</form>
		</div>
	</div>


@stop